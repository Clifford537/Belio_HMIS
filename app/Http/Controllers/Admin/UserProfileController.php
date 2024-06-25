<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('admin.profile.show', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Check if a profile picture was uploaded
        if ($request->hasFile('profile_picture')) {
            // Handle the uploaded profile picture as needed
            // Example: $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');

            // Store the uploaded file in the filesystem
            $profilePicturePath = $this->storeProfilePicture($request->file('profile_picture'));

            // Update the user's profile picture path in the database
            $user->profilePicture = $profilePicturePath;
        }

        // Update user fields, excluding 'profile_picture'
        $user->update($request->except(['profile_picture', '_method', '_token']));

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    /**
     * Store the profile picture and return the file path.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @return string
     */
    private function storeProfilePicture($file)
    {
        // Customize this method based on your file storage requirements
        // Example: return $file->store('profile_pictures', 'public');

        // For demonstration purposes, you can use a unique file name in the public directory
        $fileName = 'profile_picture_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('profile_pictures'), $fileName);

        return 'profile_pictures/' . $fileName;
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'The provided current password does not match your current password.');
        }

        $user->update(['password' => Hash::make($request->password)]);

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}

