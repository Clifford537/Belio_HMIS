<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\RadiologistDataTable;
use App\Http\Requests\Admin\CreateRadiologistRequest;
use App\Http\Requests\Admin\UpdateRadiologistRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\Specialisation;
use App\Repositories\Admin\RadiologistRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Department;

class RadiologistController extends AppBaseController
{
    /** @var RadiologistRepository $radiologistRepository*/
    private $radiologistRepository;

    public function __construct(RadiologistRepository $radiologistRepo)
    {
        $this->middleware('permission:radiologists-list|radiologists-create|radiologists-edit|radiologists-delete', ['only' => ['index','store']]);
        $this->middleware('permission:radiologists-create', ['only' => ['create','store']]);
        $this->middleware('permission:radiologists-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:radiologists-delete', ['only' => ['destroy']]);
        $this->radiologistRepository = $radiologistRepo;
    }

    /**
     * Display a listing of the Radiologist.
     */
    public function index(RadiologistDataTable $radiologistDataTable)
    {
    return $radiologistDataTable->render('Admin.radiologists.index');
    }


    /**
     * Show the form for creating a new Radiologist.
     */
    public function create()
    {
        $departments = Department::all();
        $specializations = Specialisation::all();
        return view('admin.radiologists.create',compact('departments','specializations'));
    }

    /**
     * Store a newly created Radiologist in storage.
     */
    public function store(CreateRadiologistRequest $request)
    {
        $input = $request->all();

        $radiologist = $this->radiologistRepository->create($input);

        Flash::success('Radiologist saved successfully.');

        return redirect(route('admin.radiologists.index'));
    }

    /**
     * Display the specified Radiologist.
     */
    public function show($id)
    {
        $radiologist = $this->radiologistRepository->find($id);

        if (empty($radiologist)) {
            Flash::error('Radiologist not found');

            return redirect(route('admin.radiologists.index'));
        }

        return view('admin.radiologists.show')->with('radiologist', $radiologist);
    }

    /**
     * Show the form for editing the specified Radiologist.
     */
    public function edit($id)
    {
        $radiologist = $this->radiologistRepository->find($id);
        $departments = Department::all();
        $specializations = Specialisation::all();

        if (empty($radiologist)) {
            Flash::error('Radiologist not found');

            return redirect(route('admin.radiologists.index'));
        }

        return view('admin.radiologists.edit',compact('departments','specializations'))->with('radiologist', $radiologist);
    }

    /**
     * Update the specified Radiologist in storage.
     */
    public function update($id, UpdateRadiologistRequest $request)
    {
        $radiologist = $this->radiologistRepository->find($id);

        if (empty($radiologist)) {
            Flash::error('Radiologist not found');

            return redirect(route('admin.radiologists.index'));
        }

        $radiologist = $this->radiologistRepository->update($request->all(), $id);

        Flash::success('Radiologist updated successfully.');

        return redirect(route('admin.radiologists.index'));
    }

    /**
     * Remove the specified Radiologist from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $radiologist = $this->radiologistRepository->find($id);

        if (empty($radiologist)) {
            Flash::error('Radiologist not found');

            return redirect(route('admin.radiologists.index'));
        }

        $this->radiologistRepository->delete($id);

        Flash::success('Radiologist deleted successfully.');

        return redirect(route('admin.radiologists.index'));
    }
}
