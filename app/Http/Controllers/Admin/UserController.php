<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Permission;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use PDF;
use App\DataTables\Admin\UserDataTable;
use Spatie\Permission\Models\Role;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\UserRepository;
use Flash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;

class UserController extends AppBaseController
{

    /** @var UserRepository $userRepository*/
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
        $this->middleware('permission:user-create', ['only' => ['create','store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
        $this->userRepository = $userRepo;
    }


    public function getUserRoles($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $roles = $user->getRoleNames();
            dd($roles);
        } else {
            dd("User not found");
        }
    }

    /**
     * Display a listing of the User.
     */
    public function index()
    {
        // Get the currently authenticated user
        $currentUser = Auth::user();

        // Check if the currently logged-in user has the "super_admin" or "admin" role
        $currentUserIsSuperAdminOrAdmin = $currentUser->hasAnyRole(['super_admin', 'admin']);

        // Get all users including those with the "super_admin" or "admin" role
        $perPage = 50;
        $data = User::when(!$currentUserIsSuperAdminOrAdmin, function ($query) use ($currentUser) {
            $query->whereDoesntHave('roles', function ($roleQuery) {
                $roleQuery->whereIn('name', ['super_admin', 'admin']);
            });
            $query->where('id', '<>', $currentUser->id);
        })
            ->paginate($perPage);

        return view('admin.users.index', compact('data'));
    }


    public function usersList(UserDataTable $dataTable)
    {
        return $dataTable->render('userslist');
    }

    public function activateUser(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function pdfView(Request $request)
    {
        $users = DB::table("users")->get();
        view()->share('users', $users);
        if ($request->has('download')) {
            $pdf = PDF::loadView('pdfview');
            return $pdf->download('pdfview.pdf');
        }
        return view('pdfview');
    }

    public function create()
    {
        // Exclude 'super_admin' role from the roles list
        $roles = Role::where('name', '<>', 'super_admin')->pluck('name', 'name')->all();

        return view('admin.users.create', compact('roles'));
    }


    public function makeAdmin(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->role = 1;
        $user->save();
        return redirect()->route('admin.users.index')->withSuccessMessage('User Account has been made Admin Profile');
    }

    public function makeUser(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->role = 0;
        $user->save();
        return redirect()->route('admin.users.index')->withSuccessMessage('User Account has been made a guest Profile');
    }

    public function deactivate(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->status = 1;
        $user->save();
        return redirect()->route('admin.users.index')->withSuccessMessage('User Account has been deactivated');
    }

    public function activate(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->status = 0;
        $user->save();
        return redirect()->route('admin.users.index')->withSuccessMessage('User Account has been Activated');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'roles' => ['required'],
            'password' => [
                'required',
                'string',
                Hash::check($request->current_password, Auth::user()->password) ? 'confirmed' : '',
                'min:8',
                Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised(),
            ],
        ]);

        $registerTime = now();
        $loggedUser = Auth::user()->id;

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'createdby' => $loggedUser,
            'slug' => \Str::slug($request['name'] . "_users" . $registerTime->toDateTimeString()),
            'password' => Hash::make($request['password']),
        ]);

        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.users.index')->withSuccessMessage('User Details added successfully. Thank you.');
    }

    // Other methods...

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);
            return redirect()->route('profile')->with('success', 'Password changed successfully.');
        } else {
            return back()->with('error', 'Current password is incorrect.');
        }
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }



    public function view($id)
    {
        $user = User::find($id);
        return view('admin.users.view', compact('user'));
    }


    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }

        return view('admin.users.show')->with('user', $user);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::where('name', '<>', 'super_admin')->pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('admin.users.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'confirmed',
            'roles' => 'required'
        ]);

        $input = $request->all();

        if(!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);

        DB::table('model_has_roles')
            ->where('model_id', $id)
            ->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('admin.users.index')->with('success', 'Role updated successfully.');
    }

    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('admin.users.index'));
    }

    public function changePasswordPrompt($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('admin.users.index')->with('error', 'User not found');
        }

        return view('admin.users.change-password-prompt', compact('user'));
    }

    public function updatePasswordAdmin(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'password' => 'required|confirmed|min:8',
        ]);

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Password updated successfully.');
    }


    public function loggedInUsers()
    {
        // Prepare an array to store user information
        $usersInfo = [];

        // Get all active sessions from the database
        $sessions = DB::table(config('session.table', 'sessions'))
            ->where('last_activity', '>', now()->subMinutes(5)->timestamp)
            ->get();

        // Loop through each session
        foreach ($sessions as $session) {
            // Get user ID directly from the session record
            $userId = $session->user_id;

            // Find the user by ID
            $user = User::find($userId);

            if ($user) {
                // Get user's last login time
                $lastLogin = Carbon::createFromTimestamp($session->last_activity);

                // Calculate the time difference
                $loginDuration = $lastLogin->diffForHumans();

                // Check if the user is currently active
                $isActive = $lastLogin->isAfter(now()->subMinutes(15)); // Adjust the threshold as needed

                // Build user information array
                $userInfo = [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'last_login' => $lastLogin,
                    'duration' => $loginDuration,
                    'is_active' => $isActive,
                ];

                // Add user information to the array
                $usersInfo[] = $userInfo;

                // Output user information for each user

            }
        }
        return view('admin.users.logged-in-users', compact('usersInfo'));
    }


}
