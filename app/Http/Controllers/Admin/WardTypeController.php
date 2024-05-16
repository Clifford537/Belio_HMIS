<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\WardTypeDataTable;
use App\Http\Requests\Admin\CreateWardTypeRequest;
use App\Http\Requests\Admin\UpdateWardTypeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\WardTypeRepository;
use Illuminate\Http\Request;
use Flash;

class WardTypeController extends AppBaseController
{
    /** @var WardTypeRepository $wardTypeRepository*/
    private $wardTypeRepository;

    public function __construct(WardTypeRepository $wardTypeRepo)
    {
        $this->wardTypeRepository = $wardTypeRepo;
    }

    /**
     * Display a listing of the WardType.
     */
    public function index(WardTypeDataTable $wardTypeDataTable)
    {
    return $wardTypeDataTable->render('Admin.ward_types.index');
    }


    /**
     * Show the form for creating a new WardType.
     */
    public function create()
    {
        return view('admin.ward_types.create');
    }

    /**
     * Store a newly created WardType in storage.
     */
    public function store(CreateWardTypeRequest $request)
    {
        $input = $request->all();

        $wardType = $this->wardTypeRepository->create($input);

        Flash::success('Ward Type saved successfully.');

        return redirect(route('admin.wardTypes.index'));
    }

    /**
     * Display the specified WardType.
     */
    public function show($id)
    {
        $wardType = $this->wardTypeRepository->find($id);

        if (empty($wardType)) {
            Flash::error('Ward Type not found');

            return redirect(route('admin.wardTypes.index'));
        }

        return view('admin.ward_types.show')->with('wardType', $wardType);
    }

    /**
     * Show the form for editing the specified WardType.
     */
    public function edit($id)
    {
        $wardType = $this->wardTypeRepository->find($id);

        if (empty($wardType)) {
            Flash::error('Ward Type not found');

            return redirect(route('admin.wardTypes.index'));
        }

        return view('admin.ward_types.edit')->with('wardType', $wardType);
    }

    /**
     * Update the specified WardType in storage.
     */
    public function update($id, UpdateWardTypeRequest $request)
    {
        $wardType = $this->wardTypeRepository->find($id);

        if (empty($wardType)) {
            Flash::error('Ward Type not found');

            return redirect(route('admin.wardTypes.index'));
        }

        $wardType = $this->wardTypeRepository->update($request->all(), $id);

        Flash::success('Ward Type updated successfully.');

        return redirect(route('admin.wardTypes.index'));
    }

    /**
     * Remove the specified WardType from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $wardType = $this->wardTypeRepository->find($id);

        if (empty($wardType)) {
            Flash::error('Ward Type not found');

            return redirect(route('admin.wardTypes.index'));
        }

        $this->wardTypeRepository->delete($id);

        Flash::success('Ward Type deleted successfully.');

        return redirect(route('admin.wardTypes.index'));
    }
}
