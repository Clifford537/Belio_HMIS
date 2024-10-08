<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\PatientDataTable;
use App\Http\Requests\Admin\CreatePatientRequest;
use App\Http\Requests\Admin\UpdatePatientRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\PatientRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Nurse;
use App\Models\Admin\Doctor;
use App\Models\Admin\Insurance;

class PatientController extends AppBaseController
{
    /** @var PatientRepository $patientRepository*/
    private $patientRepository;

    public function __construct(PatientRepository $patientRepo)
    {
        $this->middleware('permission:patients-list|patients-create|patients-edit|patients-delete', ['only' => ['index','store']]);
        $this->middleware('permission:patients-create', ['only' => ['create','store']]);
        $this->middleware('permission:patients-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:patients-delete', ['only' => ['destroy']]);
        $this->patientRepository = $patientRepo;
    }

    /**
     * Display a listing of the Patient.
     */
    public function index(PatientDataTable $patientDataTable)
    {
    return $patientDataTable->render('Admin.patients.index');
    }


    /**
     * Show the form for creating a new Patient.
     */
    public function create()
    {
        $insurances =Insurance::all();
        $doctors = Doctor::all();
        $nurses = Nurse::all();
        return view('admin.patients.create',compact('insurances','doctors','nurses'));
    }

    /**
     * Store a newly created Patient in storage.
     */
    public function store(CreatePatientRequest $request)
    {
        $input = $request->all();

        $patient = $this->patientRepository->create($input);

        Flash::success('Patient saved successfully. Proceed by using the oupatient and inpatient buttons');

        return redirect()->route('admin.patients.create')->withInput($input);
    }

    /**
     * Display the specified Patient.
     */
    public function show($id)
    {
        $patient = $this->patientRepository->find($id);

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('admin.patients.index'));
        }

        return view('admin.patients.show')->with('patient', $patient);
    }

    /**
     * Show the form for editing the specified Patient.
     */
    public function edit($id)
    {
        $patient = $this->patientRepository->find($id);
        $insurances =Insurance::all();
        $doctors = Doctor::all();
        $nurses = Nurse::all();

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('admin.patients.index'));
        }

        return view('admin.patients.edit',compact('insurances','doctors','nurses'))->with('patient', $patient);
    }

    /**
     * Update the specified Patient in storage.
     */
    public function update($id, UpdatePatientRequest $request)
    {
        $patient = $this->patientRepository->find($id);

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('admin.patients.index'));
        }

        $patient = $this->patientRepository->update($request->all(), $id);

        Flash::success('Patient updated successfully.');

        return redirect(route('admin.patients.index'));
    }

    /**
     * Remove the specified Patient from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $patient = $this->patientRepository->find($id);

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('admin.patients.index'));
        }

        $this->patientRepository->delete($id);

        Flash::success('Patient deleted successfully.');

        return redirect(route('admin.patients.index'));
    }
}
