<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\DoctorDataTable;
use App\Http\Requests\Admin\CreateDoctorRequest;
use App\Http\Requests\Admin\UpdateDoctorRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\DoctorRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Specialisation;
use App\Models\Admin\Department;

class DoctorController extends AppBaseController
{
    /** @var DoctorRepository $doctorRepository*/
    private $doctorRepository;

    public function __construct(DoctorRepository $doctorRepo)
    {
        $this->doctorRepository = $doctorRepo;
    }
    
    /**
     * Display a listing of the Doctor.
     */
    public function index(DoctorDataTable $doctorDataTable)
    {
    return $doctorDataTable->render('Admin.doctors.index');
    }


    /**
     * Show the form for creating a new Doctor.
     */
    public function create()
    {

        $specialisation = Specialisation::all();
        $department = Department::all();

        return view('admin.doctors.create',compact('specialisation','department'));
    }

    /**
     * Store a newly created Doctor in storage.
     */
    public function store(CreateDoctorRequest $request)
    {
        $input = $request->all();

        $doctor = $this->doctorRepository->create($input);

        Flash::success('Doctor saved successfully.');

        return redirect(route('admin.doctors.index'));
    }

    /**
     * Display the specified Doctor.
     */
    public function show($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('admin.doctors.index'));
        }

        return view('admin.doctors.show')->with('doctor', $doctor);
    }

    /**
     * Show the form for editing the specified Doctor.
     */
    public function edit($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('admin.doctors.index'));
        }

        return view('admin.doctors.edit')->with('doctor', $doctor);
    }

    /**
     * Update the specified Doctor in storage.
     */
    public function update($id, UpdateDoctorRequest $request)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('admin.doctors.index'));
        }

        $doctor = $this->doctorRepository->update($request->all(), $id);

        Flash::success('Doctor updated successfully.');

        return redirect(route('admin.doctors.index'));
    }

    /**
     * Remove the specified Doctor from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('admin.doctors.index'));
        }

        $this->doctorRepository->delete($id);

        Flash::success('Doctor deleted successfully.');

        return redirect(route('admin.doctors.index'));
    }
    
}
