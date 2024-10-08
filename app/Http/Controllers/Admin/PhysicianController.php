<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\PhysicianDataTable;
use App\Http\Requests\Admin\CreatePhysicianRequest;
use App\Http\Requests\Admin\UpdatePhysicianRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\PhysicianRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Specialisation;
use App\Models\Admin\RadiologyProcedure;

class PhysicianController extends AppBaseController
{
    /** @var PhysicianRepository $physicianRepository*/
    private $physicianRepository;

    public function __construct(PhysicianRepository $physicianRepo)
    {
        $this->middleware('permission:physicians-list|physicians-create|physicians-edit|physicians-delete', ['only' => ['index','store']]);
        $this->middleware('permission:physicians-create', ['only' => ['create','store']]);
        $this->middleware('permission:physicians-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:physicians-delete', ['only' => ['destroy']]);
        $this->physicianRepository = $physicianRepo;
    }

    /**
     * Display a listing of the Physician.
     */
    public function index(PhysicianDataTable $physicianDataTable)
    {
    return $physicianDataTable->render('Admin.physicians.index');
    }


    /**
     * Show the form for creating a new Physician.
     */
    public function create()
    {
        $procedures = RadiologyProcedure::all();
        $specs = Specialisation::all();
        return view('admin.physicians.create',compact('procedures','specs'));
    }

    /**
     * Store a newly created Physician in storage.
     */
    public function store(CreatePhysicianRequest $request)
    {
        $input = $request->all();

        $physician = $this->physicianRepository->create($input);

        Flash::success('Physician saved successfully.');

        return redirect(route('admin.physicians.index'));
    }

    /**
     * Display the specified Physician.
     */
    public function show($id)
    {
        $physician = $this->physicianRepository->find($id);

        if (empty($physician)) {
            Flash::error('Physician not found');

            return redirect(route('admin.physicians.index'));
        }

        return view('admin.physicians.show')->with('physician', $physician);
    }

    /**
     * Show the form for editing the specified Physician.
     */
    public function edit($id)
    {
        $physician = $this->physicianRepository->find($id);
        $procedures = RadiologyProcedure::all();
        $specs = Specialisation::all();

        if (empty($physician)) {
            Flash::error('Physician not found');

            return redirect(route('admin.physicians.index',compact('procedures','specs')));
        }

        return view('admin.physicians.edit')->with('physician', $physician);
    }

    /**
     * Update the specified Physician in storage.
     */
    public function update($id, UpdatePhysicianRequest $request)
    {
        $physician = $this->physicianRepository->find($id);

        if (empty($physician)) {
            Flash::error('Physician not found');

            return redirect(route('admin.physicians.index'));
        }

        $physician = $this->physicianRepository->update($request->all(), $id);

        Flash::success('Physician updated successfully.');

        return redirect(route('admin.physicians.index'));
    }

    /**
     * Remove the specified Physician from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $physician = $this->physicianRepository->find($id);

        if (empty($physician)) {
            Flash::error('Physician not found');

            return redirect(route('admin.physicians.index'));
        }

        $this->physicianRepository->delete($id);

        Flash::success('Physician deleted successfully.');

        return redirect(route('admin.physicians.index'));
    }
}
