<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\RadiologyProcedureDataTable;
use App\Http\Requests\Admin\CreateRadiologyProcedureRequest;
use App\Http\Requests\Admin\UpdateRadiologyProcedureRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\Radiologist;
use App\Repositories\Admin\RadiologyProcedureRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Doctor;
use App\Models\Admin\Insurance;
use App\Models\Admin\Patient;
use App\Models\Admin\Theatre;


class RadiologyProcedureController extends AppBaseController
{
    /** @var RadiologyProcedureRepository $radiologyProcedureRepository*/
    private $radiologyProcedureRepository;

    public function __construct(RadiologyProcedureRepository $radiologyProcedureRepo)
    {
        $this->middleware('permission:radiology-procedure-list|radiology-procedure-create|radiology-procedure-edit|radiology-procedure-delete', ['only' => ['index','store']]);
        $this->middleware('permission:radiology-procedure-create', ['only' => ['create','store']]);
        $this->middleware('permission:radiology-procedure-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:radiology-procedure-delete', ['only' => ['destroy']]);
        $this->radiologyProcedureRepository = $radiologyProcedureRepo;
    }

    /**
     * Display a listing of the RadiologyProcedure.
     */
    public function index(RadiologyProcedureDataTable $radiologyProcedureDataTable)
    {
    return $radiologyProcedureDataTable->render('Admin.radiology_procedures.index');
    }


    /**
     * Show the form for creating a new RadiologyProcedure.
     */
    public function create()
    {
        $doctor = Doctor::all();
        $patient = Patient::all();
        $insurance =Insurance::all();
        $theatre = Theatre::all();
        $radiologist = Radiologist::all();
        return view('admin.radiology_procedures.create',compact('doctor','radiologist','patient','insurance','theatre'));
    }

    /**
     * Store a newly created RadiologyProcedure in storage.
     */
    public function store(CreateRadiologyProcedureRequest $request)
    {
        $input = $request->all();

        $radiologyProcedure = $this->radiologyProcedureRepository->create($input);

        Flash::success('Radiology Procedure saved successfully.');

        return redirect(route('admin.radiologyProcedures.index'));
    }

    /**
     * Display the specified RadiologyProcedure.
     */
    public function show($id)
    {
        $radiologyProcedure = $this->radiologyProcedureRepository->find($id);

        if (empty($radiologyProcedure)) {
            Flash::error('Radiology Procedure not found');

            return redirect(route('admin.radiologyProcedures.index'));
        }

        return view('admin.radiology_procedures.show')->with('radiologyProcedure', $radiologyProcedure);
    }

    /**
     * Show the form for editing the specified RadiologyProcedure.
     */
    public function edit($id)
    {
        $radiologyProcedure = $this->radiologyProcedureRepository->find($id);
        $doctor = Doctor::all();
        $patient = Patient::all();
        $insurance =Insurance::all();
        $theatre = Theatre::all();
        $radiologist = Radiologist::all();

        if (empty($radiologyProcedure)) {
            Flash::error('Radiology Procedure not found');

            return redirect(route('admin.radiologyProcedures.index'));
        }

        return view('admin.radiology_procedures.edit',compact('doctor','patient','insurance','theatre','radiologist'))->with('radiologyProcedure', $radiologyProcedure);
    }

    /**
     * Update the specified RadiologyProcedure in storage.
     */
    public function update($id, UpdateRadiologyProcedureRequest $request)
    {
        $radiologyProcedure = $this->radiologyProcedureRepository->find($id);

        if (empty($radiologyProcedure)) {
            Flash::error('Radiology Procedure not found');

            return redirect(route('admin.radiologyProcedures.index'));
        }

        $radiologyProcedure = $this->radiologyProcedureRepository->update($request->all(), $id);

        Flash::success('Radiology Procedure updated successfully.');

        return redirect(route('admin.radiologyProcedures.index'));
    }

    /**
     * Remove the specified RadiologyProcedure from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $radiologyProcedure = $this->radiologyProcedureRepository->find($id);

        if (empty($radiologyProcedure)) {
            Flash::error('Radiology Procedure not found');

            return redirect(route('admin.radiologyProcedures.index'));
        }

        $this->radiologyProcedureRepository->delete($id);

        Flash::success('Radiology Procedure deleted successfully.');

        return redirect(route('admin.radiologyProcedures.index'));
    }
}
