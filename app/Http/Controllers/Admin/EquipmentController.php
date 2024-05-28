<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\EquipmentDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\Admin\CreateEquipmentRequest;
use App\Http\Requests\Admin\UpdateEquipmentRequest;
use App\Repositories\EquipmentRepository;
use Flash;

class EquipmentController extends AppBaseController
{
    /** @var EquipmentRepository $equipmentRepository*/
    private $equipmentRepository;

    public function __construct(EquipmentRepository $equipmentRepo)
    {
        $this->equipmentRepository = $equipmentRepo;
    }

    /**
     * Display a listing of the Equipment.
     */
    public function index(EquipmentDataTable $equipmentDataTable)
    {
    return $equipmentDataTable->render('equipment.index');
    }


    /**
     * Show the form for creating a new Equipment.
     */
    public function create()
    {
        return view('equipment.create');
    }

    /**
     * Store a newly created Equipment in storage.
     */
    public function store(CreateEquipmentRequest $request)
    {
        $input = $request->all();

        $equipment = $this->equipmentRepository->create($input);

        Flash::success('Equipment saved successfully.');

        return redirect(route('equipment.index'));
    }

    /**
     * Display the specified Equipment.
     */
    public function show($id)
    {
        $equipment = $this->equipmentRepository->find($id);

        if (empty($equipment)) {
            Flash::error('Equipment not found');

            return redirect(route('equipment.index'));
        }

        return view('equipment.show')->with('equipment', $equipment);
    }

    /**
     * Show the form for editing the specified Equipment.
     */
    public function edit($id)
    {
        $equipment = $this->equipmentRepository->find($id);

        if (empty($equipment)) {
            Flash::error('Equipment not found');

            return redirect(route('equipment.index'));
        }

        return view('equipment.edit')->with('equipment', $equipment);
    }

    /**
     * Update the specified Equipment in storage.
     */
    public function update($id, UpdateEquipmentRequest $request)
    {
        $equipment = $this->equipmentRepository->find($id);

        if (empty($equipment)) {
            Flash::error('Equipment not found');

            return redirect(route('equipment.index'));
        }

        $equipment = $this->equipmentRepository->update($request->all(), $id);

        Flash::success('Equipment updated successfully.');

        return redirect(route('equipment.index'));
    }

    /**
     * Remove the specified Equipment from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $equipment = $this->equipmentRepository->find($id);

        if (empty($equipment)) {
            Flash::error('Equipment not found');

            return redirect(route('equipment.index'));
        }

        $this->equipmentRepository->delete($id);

        Flash::success('Equipment deleted successfully.');

        return redirect(route('equipment.index'));
    }
}
