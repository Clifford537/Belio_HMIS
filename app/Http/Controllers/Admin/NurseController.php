<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\NurseDataTable;
use App\Http\Requests\Admin\CreateNurseRequest;
use App\Http\Requests\Admin\UpdateNurseRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\NurseRepository;
use Illuminate\Http\Request;
use Flash;

class NurseController extends AppBaseController
{
    /** @var NurseRepository $nurseRepository*/
    private $nurseRepository;

    public function __construct(NurseRepository $nurseRepo)
    {
        $this->nurseRepository = $nurseRepo;
    }

    /**
     * Display a listing of the Nurse.
     */
    public function index(NurseDataTable $nurseDataTable)
    {
    return $nurseDataTable->render('Admin.nurses.index');
    }


    /**
     * Show the form for creating a new Nurse.
     */
    public function create()
    {
        return view('admin.nurses.create');
    }

    /**
     * Store a newly created Nurse in storage.
     */
    public function store(CreateNurseRequest $request)
    {
        $input = $request->all();

        $nurse = $this->nurseRepository->create($input);

        Flash::success('Nurse saved successfully.');

        return redirect(route('admin.nurses.index'));
    }

    /**
     * Display the specified Nurse.
     */
    public function show($id)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('admin.nurses.index'));
        }

        return view('admin.nurses.show')->with('nurse', $nurse);
    }

    /**
     * Show the form for editing the specified Nurse.
     */
    public function edit($id)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('admin.nurses.index'));
        }

        return view('admin.nurses.edit')->with('nurse', $nurse);
    }

    /**
     * Update the specified Nurse in storage.
     */
    public function update($id, UpdateNurseRequest $request)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('admin.nurses.index'));
        }

        $nurse = $this->nurseRepository->update($request->all(), $id);

        Flash::success('Nurse updated successfully.');

        return redirect(route('admin.nurses.index'));
    }

    /**
     * Remove the specified Nurse from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('admin.nurses.index'));
        }

        $this->nurseRepository->delete($id);

        Flash::success('Nurse deleted successfully.');

        return redirect(route('admin.nurses.index'));
    }
}
