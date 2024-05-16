<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\Bed_TypeDataTable;
use App\Http\Requests\Admin\CreateBed_TypeRequest;
use App\Http\Requests\Admin\UpdateBed_TypeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\Bed_TypeRepository;
use Illuminate\Http\Request;
use Flash;

class Bed_TypeController extends AppBaseController
{
    /** @var Bed_TypeRepository $bedTypeRepository*/
    private $bedTypeRepository;

    public function __construct(Bed_TypeRepository $bedTypeRepo)
    {
        $this->bedTypeRepository = $bedTypeRepo;
    }

    /**
     * Display a listing of the Bed_Type.
     */
    public function index(Bed_TypeDataTable $bedTypeDataTable)
    {
    return $bedTypeDataTable->render('Admin.bed__types.index');
    }


    /**
     * Show the form for creating a new Bed_Type.
     */
    public function create()
    {
        return view('admin.bed__types.create');
    }

    /**
     * Store a newly created Bed_Type in storage.
     */
    public function store(CreateBed_TypeRequest $request)
    {
        $input = $request->all();

        $bedType = $this->bedTypeRepository->create($input);

        Flash::success('Bed  Type saved successfully.');

        return redirect(route('admin.bedTypes.index'));
    }

    /**
     * Display the specified Bed_Type.
     */
    public function show($id)
    {
        $bedType = $this->bedTypeRepository->find($id);

        if (empty($bedType)) {
            Flash::error('Bed  Type not found');

            return redirect(route('admin.bedTypes.index'));
        }

        return view('admin.bed__types.show')->with('bedType', $bedType);
    }

    /**
     * Show the form for editing the specified Bed_Type.
     */
    public function edit($id)
    {
        $bedType = $this->bedTypeRepository->find($id);

        if (empty($bedType)) {
            Flash::error('Bed  Type not found');

            return redirect(route('admin.bedTypes.index'));
        }

        return view('admin.bed__types.edit')->with('bedType', $bedType);
    }

    /**
     * Update the specified Bed_Type in storage.
     */
    public function update($id, UpdateBed_TypeRequest $request)
    {
        $bedType = $this->bedTypeRepository->find($id);

        if (empty($bedType)) {
            Flash::error('Bed  Type not found');

            return redirect(route('admin.bedTypes.index'));
        }

        $bedType = $this->bedTypeRepository->update($request->all(), $id);

        Flash::success('Bed  Type updated successfully.');

        return redirect(route('admin.bedTypes.index'));
    }

    /**
     * Remove the specified Bed_Type from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bedType = $this->bedTypeRepository->find($id);

        if (empty($bedType)) {
            Flash::error('Bed  Type not found');

            return redirect(route('admin.bedTypes.index'));
        }

        $this->bedTypeRepository->delete($id);

        Flash::success('Bed  Type deleted successfully.');

        return redirect(route('admin.bedTypes.index'));
    }
}
