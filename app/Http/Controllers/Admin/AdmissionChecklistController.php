<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\AdmissionChecklistDataTable;
use App\Http\Requests\Admin\CreateAdmissionChecklistRequest;
use App\Http\Requests\Admin\UpdateAdmissionChecklistRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\AdmissionChecklistRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Ward;

class AdmissionChecklistController extends AppBaseController
{
    /** @var AdmissionChecklistRepository $admissionChecklistRepository*/
    private $admissionChecklistRepository;

    public function __construct(AdmissionChecklistRepository $admissionChecklistRepo)
    {
        $this->admissionChecklistRepository = $admissionChecklistRepo;
    }

    /**
     * Display a listing of the AdmissionChecklist.
     */
    public function index(AdmissionChecklistDataTable $admissionChecklistDataTable)
    {
    return $admissionChecklistDataTable->render('Admin.admission_checklists.index');
    }


    /**
     * Show the form for creating a new AdmissionChecklist.
     */
    public function create()
    {
        $wards = Ward::all();
        return view('admin.admission_checklists.create',compact('wards'));
    }

    /**
     * Store a newly created AdmissionChecklist in storage.
     */
    public function store(CreateAdmissionChecklistRequest $request)
    {
        $input = $request->all();

        $admissionChecklist = $this->admissionChecklistRepository->create($input);

        Flash::success('Admission Checklist saved successfully.');

        return redirect(route('admin.admissionChecklists.index'));
    }

    /**
     * Display the specified AdmissionChecklist.
     */
    public function show($id)
    {
        $admissionChecklist = $this->admissionChecklistRepository->find($id);

        if (empty($admissionChecklist)) {
            Flash::error('Admission Checklist not found');

            return redirect(route('admin.admissionChecklists.index'));
        }

        return view('admin.admission_checklists.show')->with('admissionChecklist', $admissionChecklist);
    }

    /**
     * Show the form for editing the specified AdmissionChecklist.
     */
    public function edit($id)
    {
        $admissionChecklist = $this->admissionChecklistRepository->find($id);

        if (empty($admissionChecklist)) {
            Flash::error('Admission Checklist not found');

            return redirect(route('admin.admissionChecklists.index'));
        }

        return view('admin.admission_checklists.edit')->with('admissionChecklist', $admissionChecklist);
    }

    /**
     * Update the specified AdmissionChecklist in storage.
     */
    public function update($id, UpdateAdmissionChecklistRequest $request)
    {
        $admissionChecklist = $this->admissionChecklistRepository->find($id);

        if (empty($admissionChecklist)) {
            Flash::error('Admission Checklist not found');

            return redirect(route('admin.admissionChecklists.index'));
        }

        $admissionChecklist = $this->admissionChecklistRepository->update($request->all(), $id);

        Flash::success('Admission Checklist updated successfully.');

        return redirect(route('admin.admissionChecklists.index'));
    }

    /**
     * Remove the specified AdmissionChecklist from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $admissionChecklist = $this->admissionChecklistRepository->find($id);

        if (empty($admissionChecklist)) {
            Flash::error('Admission Checklist not found');

            return redirect(route('admin.admissionChecklists.index'));
        }

        $this->admissionChecklistRepository->delete($id);

        Flash::success('Admission Checklist deleted successfully.');

        return redirect(route('admin.admissionChecklists.index'));
    }
}
