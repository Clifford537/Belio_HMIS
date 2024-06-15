<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\PermissionDataTable;
use App\Http\Requests\Admin\CreatePermissionRequest;
use App\Http\Requests\Admin\UpdatePermissionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\PermissionRepository;
use Illuminate\Http\Request;
use Flash;

class PermissionController extends AppBaseController
{
    /** @var PermissionRepository $permissionRepository*/
    private $permissionRepository;

    public function __construct(PermissionRepository $permissionRepo)
    {
        $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete', ['only' => ['index','store']]);
        $this->middleware('permission:permission-create', ['only' => ['create','store']]);
        $this->middleware('permission:permission-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
        $this->permissionRepository = $permissionRepo;
    }

    /**
     * Display a listing of the Permission.
     */
    public function index(PermissionDataTable $permissionDataTable)
    {
    return $permissionDataTable->render('admin.permissions.index');
    }


    /**
     * Show the form for creating a new Permission.
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created Permission in storage.
     */
    public function store(CreatePermissionRequest $request)
    {
        $input = $request->all();

        // Add 'guard_name' to the input array
        $input['guard_name'] = 'web';

        $permission = $this->permissionRepository->create($input);

        Flash::success('Permission saved successfully.');

        return redirect(route('admin.permissions.index'));
    }


    /**
     * Display the specified Permission.
     */
    public function show($id)
    {
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('admin.permissions.index'));
        }

        return view('admin.permissions.show')->with('permission', $permission);
    }

    /**
     * Show the form for editing the specified Permission.
     */
    public function edit($id)
    {
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('admin.permissions.index'));
        }

        return view('admin.permissions.edit')->with('permission', $permission);
    }

    /**
     * Update the specified Permission in storage.
     */
    public function update($id, UpdatePermissionRequest $request)
    {
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('admin.permissions.index'));
        }

        $permission = $this->permissionRepository->update($request->all(), $id);

        Flash::success('Permission updated successfully.');

        return redirect(route('admin.permissions.index'));
    }

    /**
     * Remove the specified Permission from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            Flash::error('Permission not found');

            return redirect(route('admin.permissions.index'));
        }

        $this->permissionRepository->delete($id);

        Flash::success('Permission deleted successfully.');

        return redirect(route('admin.permissions.index'));
    }
}
