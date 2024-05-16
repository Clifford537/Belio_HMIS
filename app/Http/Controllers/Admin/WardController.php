<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\WardDataTable;
use App\Http\Requests\Admin\CreateWardRequest;
use App\Http\Requests\Admin\UpdateWardRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\WardRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\WardType;
use App\Models\Admin\Nurse;


class WardController extends AppBaseController
{
    /** @var WardRepository $wardRepository*/
    private $wardRepository;

    public function __construct(WardRepository $wardRepo)
    {
        $this->wardRepository = $wardRepo;
    }

    /**
     * Display a listing of the Ward.
     */
    public function index(WardDataTable $wardDataTable)
    {
    return $wardDataTable->render('Admin.wards.index');
    }


    /**
     * Show the form for creating a new Ward.
     */
    public function create()
    {
        $wardTypes = WardType::all();
        $nurses = Nurse::all();
        return view('admin.wards.create', compact('wardTypes','nurses'));
    }

    /**
     * Store a newly created Ward in storage.
     */
    public function store(CreateWardRequest $request)
    {
        $input = $request->all();

        $ward = $this->wardRepository->create($input);

        Flash::success('Ward saved successfully.');

        return redirect(route('admin.wards.index'));
    }

    /**
     * Display the specified Ward.
     */
    public function show($id)
    {
        $ward = $this->wardRepository->find($id);

        if (empty($ward)) {
            Flash::error('Ward not found');

            return redirect(route('admin.wards.index'));
        }

        return view('admin.wards.show')->with('ward', $ward);
    }

    /**
     * Show the form for editing the specified Ward.
     */
    public function edit($id)
    {
        $ward = $this->wardRepository->find($id);

        if (empty($ward)) {
            Flash::error('Ward not found');

            return redirect(route('admin.wards.index'));
        }

        return view('admin.wards.edit')->with('ward', $ward);
    }

    /**
     * Update the specified Ward in storage.
     */
    public function update($id, UpdateWardRequest $request)
    {
        $ward = $this->wardRepository->find($id);

        if (empty($ward)) {
            Flash::error('Ward not found');

            return redirect(route('admin.wards.index'));
        }

        $ward = $this->wardRepository->update($request->all(), $id);

        Flash::success('Ward updated successfully.');

        return redirect(route('admin.wards.index'));
    }

    /**
     * Remove the specified Ward from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ward = $this->wardRepository->find($id);

        if (empty($ward)) {
            Flash::error('Ward not found');

            return redirect(route('admin.wards.index'));
        }

        $this->wardRepository->delete($id);

        Flash::success('Ward deleted successfully.');

        return redirect(route('admin.wards.index'));
    }
}
