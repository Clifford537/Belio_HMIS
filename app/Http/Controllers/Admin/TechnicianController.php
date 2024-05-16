<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\TechnicianDataTable;
use App\Http\Requests\Admin\CreateTechnicianRequest;
use App\Http\Requests\Admin\UpdateTechnicianRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\TechnicianRepository;
use Illuminate\Http\Request;
use Flash;

class TechnicianController extends AppBaseController
{
    /** @var TechnicianRepository $technicianRepository*/
    private $technicianRepository;

    public function __construct(TechnicianRepository $technicianRepo)
    {
        $this->technicianRepository = $technicianRepo;
    }

    /**
     * Display a listing of the Technician.
     */
    public function index(TechnicianDataTable $technicianDataTable)
    {
    return $technicianDataTable->render('Admin.technicians.index');
    }


    /**
     * Show the form for creating a new Technician.
     */
    public function create()
    {
        return view('admin.technicians.create');
    }

    /**
     * Store a newly created Technician in storage.
     */
    public function store(CreateTechnicianRequest $request)
    {
        $input = $request->all();

        $technician = $this->technicianRepository->create($input);

        Flash::success('Technician saved successfully.');

        return redirect(route('admin.technicians.index'));
    }

    /**
     * Display the specified Technician.
     */
    public function show($id)
    {
        $technician = $this->technicianRepository->find($id);

        if (empty($technician)) {
            Flash::error('Technician not found');

            return redirect(route('admin.technicians.index'));
        }

        return view('admin.technicians.show')->with('technician', $technician);
    }

    /**
     * Show the form for editing the specified Technician.
     */
    public function edit($id)
    {
        $technician = $this->technicianRepository->find($id);

        if (empty($technician)) {
            Flash::error('Technician not found');

            return redirect(route('admin.technicians.index'));
        }

        return view('admin.technicians.edit')->with('technician', $technician);
    }

    /**
     * Update the specified Technician in storage.
     */
    public function update($id, UpdateTechnicianRequest $request)
    {
        $technician = $this->technicianRepository->find($id);

        if (empty($technician)) {
            Flash::error('Technician not found');

            return redirect(route('admin.technicians.index'));
        }

        $technician = $this->technicianRepository->update($request->all(), $id);

        Flash::success('Technician updated successfully.');

        return redirect(route('admin.technicians.index'));
    }

    /**
     * Remove the specified Technician from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $technician = $this->technicianRepository->find($id);

        if (empty($technician)) {
            Flash::error('Technician not found');

            return redirect(route('admin.technicians.index'));
        }

        $this->technicianRepository->delete($id);

        Flash::success('Technician deleted successfully.');

        return redirect(route('admin.technicians.index'));
    }
}
