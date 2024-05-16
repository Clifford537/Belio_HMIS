<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\MedicalRecordDataTable;
use App\Http\Requests\Admin\CreateMedicalRecordRequest;
use App\Http\Requests\Admin\UpdateMedicalRecordRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\MedicalRecordRepository;
use Illuminate\Http\Request;
use Flash;

class MedicalRecordController extends AppBaseController
{
    /** @var MedicalRecordRepository $medicalRecordRepository*/
    private $medicalRecordRepository;

    public function __construct(MedicalRecordRepository $medicalRecordRepo)
    {
        $this->medicalRecordRepository = $medicalRecordRepo;
    }

    /**
     * Display a listing of the MedicalRecord.
     */
    public function index(MedicalRecordDataTable $medicalRecordDataTable)
    {
    return $medicalRecordDataTable->render('Admin.medical_records.index');
    }


    /**
     * Show the form for creating a new MedicalRecord.
     */
    public function create()
    {
        return view('admin.medical_records.create');
    }

    /**
     * Store a newly created MedicalRecord in storage.
     */
    public function store(CreateMedicalRecordRequest $request)
    {
        $input = $request->all();

        $medicalRecord = $this->medicalRecordRepository->create($input);

        Flash::success('Medical Record saved successfully.');

        return redirect(route('admin.medicalRecords.index'));
    }

    /**
     * Display the specified MedicalRecord.
     */
    public function show($id)
    {
        $medicalRecord = $this->medicalRecordRepository->find($id);

        if (empty($medicalRecord)) {
            Flash::error('Medical Record not found');

            return redirect(route('admin.medicalRecords.index'));
        }

        return view('admin.medical_records.show')->with('medicalRecord', $medicalRecord);
    }

    /**
     * Show the form for editing the specified MedicalRecord.
     */
    public function edit($id)
    {
        $medicalRecord = $this->medicalRecordRepository->find($id);

        if (empty($medicalRecord)) {
            Flash::error('Medical Record not found');

            return redirect(route('admin.medicalRecords.index'));
        }

        return view('admin.medical_records.edit')->with('medicalRecord', $medicalRecord);
    }

    /**
     * Update the specified MedicalRecord in storage.
     */
    public function update($id, UpdateMedicalRecordRequest $request)
    {
        $medicalRecord = $this->medicalRecordRepository->find($id);

        if (empty($medicalRecord)) {
            Flash::error('Medical Record not found');

            return redirect(route('admin.medicalRecords.index'));
        }

        $medicalRecord = $this->medicalRecordRepository->update($request->all(), $id);

        Flash::success('Medical Record updated successfully.');

        return redirect(route('admin.medicalRecords.index'));
    }

    /**
     * Remove the specified MedicalRecord from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medicalRecord = $this->medicalRecordRepository->find($id);

        if (empty($medicalRecord)) {
            Flash::error('Medical Record not found');

            return redirect(route('admin.medicalRecords.index'));
        }

        $this->medicalRecordRepository->delete($id);

        Flash::success('Medical Record deleted successfully.');

        return redirect(route('admin.medicalRecords.index'));
    }
}
