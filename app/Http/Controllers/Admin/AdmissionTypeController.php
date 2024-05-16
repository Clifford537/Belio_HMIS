<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\AdmissionTypeDataTable;
use App\Http\Requests\Admin\CreateAdmissionTypeRequest;
use App\Http\Requests\Admin\UpdateAdmissionTypeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\AdmissionTypeRepository;
use Illuminate\Http\Request;
use Flash;

class AdmissionTypeController extends AppBaseController
{
    /** @var AdmissionTypeRepository $admissionTypeRepository*/
    private $admissionTypeRepository;

    public function __construct(AdmissionTypeRepository $admissionTypeRepo)
    {
        $this->admissionTypeRepository = $admissionTypeRepo;
    }

    /**
     * Display a listing of the AdmissionType.
     */
    public function index(AdmissionTypeDataTable $admissionTypeDataTable)
    {
    return $admissionTypeDataTable->render('Admin.admission_types.index');
    }


    /**
     * Show the form for creating a new AdmissionType.
     */
    public function create()
    {
        return view('admin.admission_types.create');
    }

    /**
     * Store a newly created AdmissionType in storage.
     */
    public function store(CreateAdmissionTypeRequest $request)
    {
        $input = $request->all();

        $admissionType = $this->admissionTypeRepository->create($input);

        Flash::success('Admission Type saved successfully.');

        return redirect(route('admin.admissionTypes.index'));
    }

    /**
     * Display the specified AdmissionType.
     */
    public function show($id)
    {
        $admissionType = $this->admissionTypeRepository->find($id);

        if (empty($admissionType)) {
            Flash::error('Admission Type not found');

            return redirect(route('admin.admissionTypes.index'));
        }

        return view('admin.admission_types.show')->with('admissionType', $admissionType);
    }

    /**
     * Show the form for editing the specified AdmissionType.
     */
    public function edit($id)
    {
        $admissionType = $this->admissionTypeRepository->find($id);

        if (empty($admissionType)) {
            Flash::error('Admission Type not found');

            return redirect(route('admin.admissionTypes.index'));
        }

        return view('admin.admission_types.edit')->with('admissionType', $admissionType);
    }

    /**
     * Update the specified AdmissionType in storage.
     */
    public function update($id, UpdateAdmissionTypeRequest $request)
    {
        $admissionType = $this->admissionTypeRepository->find($id);

        if (empty($admissionType)) {
            Flash::error('Admission Type not found');

            return redirect(route('admin.admissionTypes.index'));
        }

        $admissionType = $this->admissionTypeRepository->update($request->all(), $id);

        Flash::success('Admission Type updated successfully.');

        return redirect(route('admin.admissionTypes.index'));
    }

    /**
     * Remove the specified AdmissionType from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $admissionType = $this->admissionTypeRepository->find($id);

        if (empty($admissionType)) {
            Flash::error('Admission Type not found');

            return redirect(route('admin.admissionTypes.index'));
        }

        $this->admissionTypeRepository->delete($id);

        Flash::success('Admission Type deleted successfully.');

        return redirect(route('admin.admissionTypes.index'));
    }
}
