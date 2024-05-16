<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\AdmissionDataTable;
use App\Http\Requests\Admin\CreateAdmissionRequest;
use App\Http\Requests\Admin\UpdateAdmissionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\AdmissionRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Patient;
use App\Models\Admin\Doctor;
use App\Models\Admin\AdmissionType;
class AdmissionController extends AppBaseController
{
    /** @var AdmissionRepository $admissionRepository*/
    private $admissionRepository;

    public function __construct(AdmissionRepository $admissionRepo)
    {
        $this->admissionRepository = $admissionRepo;
    }

    /**
     * Display a listing of the Admission.
     */
    public function index(AdmissionDataTable $admissionDataTable)
    {
    return $admissionDataTable->render('Admin.admissions.index');
    }


    /**
     * Show the form for creating a new Admission.
     */
    public function create()
    {
        $patients =Patient::all();
        $doctors = Doctor::all();
        $admission_types= AdmissionType::all();
        return view('admin.admissions.create', compact('patients','doctors','admission_types'));
    }
    

    /**
     * Store a newly created Admission in storage.
     */
    public function store(CreateAdmissionRequest $request)
    {
        $input = $request->all();

        $admission = $this->admissionRepository->create($input);

        Flash::success('Admission saved successfully.');

        return redirect(route('admin.admissions.index'));
    }

    /**
     * Display the specified Admission.
     */
    public function show($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admin.admissions.index'));
        }

        return view('admin.admissions.show')->with('admission', $admission);
    }

    /**
     * Show the form for editing the specified Admission.
     */
    public function edit($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admin.admissions.index'));
        }

        return view('admin.admissions.edit')->with('admission', $admission);
    }

    /**
     * Update the specified Admission in storage.
     */
    public function update($id, UpdateAdmissionRequest $request)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admin.admissions.index'));
        }

        $admission = $this->admissionRepository->update($request->all(), $id);

        Flash::success('Admission updated successfully.');

        return redirect(route('admin.admissions.index'));
    }

    /**
     * Remove the specified Admission from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admin.admissions.index'));
        }

        $this->admissionRepository->delete($id);

        Flash::success('Admission deleted successfully.');

        return redirect(route('admin.admissions.index'));
    }
}
