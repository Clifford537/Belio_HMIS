<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\LaboratoryDataTable;
use App\Http\Requests\Admin\CreateLaboratoryRequest;
use App\Http\Requests\Admin\UpdateLaboratoryRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\LaboratoryRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Department;
use App\Models\Admin\Technician;
use App\Models\Admin\Equipment;


class LaboratoryController extends AppBaseController
{
    /** @var LaboratoryRepository $laboratoryRepository*/
    private $laboratoryRepository;

    public function __construct(LaboratoryRepository $laboratoryRepo)
    {
        $this->middleware('permission:laboratories-list|laboratories-create|laboratories-edit|laboratories-delete', ['only' => ['index','store']]);
        $this->middleware('permission:laboratories-create', ['only' => ['create','store']]);
        $this->middleware('permission:laboratories-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:laboratories-delete', ['only' => ['destroy']]);
        $this->laboratoryRepository = $laboratoryRepo;
    }

    /**
     * Display a listing of the Laboratory.
     */
    public function index(LaboratoryDataTable $laboratoryDataTable)
    {
    return $laboratoryDataTable->render('Admin.laboratories.index');
    }


    /**
     * Show the form for creating a new Laboratory.
     */
    public function create()
    {
        $department = Department::all();
        $technician = Technician::all();
        $equipment = Equipment::all();
        return view('admin.laboratories.create', compact('department','technician','equipment'));
    }

    /**
     * Store a newly created Laboratory in storage.
     */
    public function store(CreateLaboratoryRequest $request)
    {
        $input = $request->all();

        $laboratory = $this->laboratoryRepository->create($input);

        Flash::success('Laboratory saved successfully.');

        return redirect(route('admin.laboratories.index'));
    }

    /**
     * Display the specified Laboratory.
     */
    public function show($id)
    {
        $laboratory = $this->laboratoryRepository->find($id);

        if (empty($laboratory)) {
            Flash::error('Laboratory not found');

            return redirect(route('admin.laboratories.index'));
        }

        return view('admin.laboratories.show')->with('laboratory', $laboratory);
    }

    /**
     * Show the form for editing the specified Laboratory.
     */
    public function edit($id)
    {
        $laboratory = $this->laboratoryRepository->find($id);
        $department = Department::all();
        $technician = Technician::all();
        $equipment = Equipment::all();

        if (empty($laboratory)) {
            Flash::error('Laboratory not found');

            return redirect(route('admin.laboratories.index'));
        }

        return view('admin.laboratories.edit',compact('department','technician','equipment'))->with('laboratory', $laboratory);
    }

    /**
     * Update the specified Laboratory in storage.
     */
    public function update($id, UpdateLaboratoryRequest $request)
    {
        $laboratory = $this->laboratoryRepository->find($id);

        if (empty($laboratory)) {
            Flash::error('Laboratory not found');

            return redirect(route('admin.laboratories.index'));
        }

        $laboratory = $this->laboratoryRepository->update($request->all(), $id);

        Flash::success('Laboratory updated successfully.');

        return redirect(route('admin.laboratories.index'));
    }

    /**
     * Remove the specified Laboratory from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $laboratory = $this->laboratoryRepository->find($id);

        if (empty($laboratory)) {
            Flash::error('Laboratory not found');

            return redirect(route('admin.laboratories.index'));
        }

        $this->laboratoryRepository->delete($id);

        Flash::success('Laboratory deleted successfully.');

        return redirect(route('admin.laboratories.index'));
    }
}
