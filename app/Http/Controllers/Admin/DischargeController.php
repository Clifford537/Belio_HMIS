<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\DischargeDataTable;
use App\Http\Requests\Admin\CreateDischargeRequest;
use App\Http\Requests\Admin\UpdateDischargeRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\DischargeRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Admission;


class DischargeController extends AppBaseController
{
    /** @var DischargeRepository $dischargeRepository*/
    private $dischargeRepository;

    public function __construct(DischargeRepository $dischargeRepo)
    {
        $this->dischargeRepository = $dischargeRepo;
    }

    /**
     * Display a listing of the Discharge.
     */
    public function index(DischargeDataTable $dischargeDataTable)
    {
    return $dischargeDataTable->render('Admin.discharges.index');
    }


    /**
     * Show the form for creating a new Discharge.
     */
    public function create()
    {
        $admissions = Admission::all();
        return view('admin.discharges.create', compact('admissions'));
    }

    /**
     * Store a newly created Discharge in storage.
     */
    public function store(CreateDischargeRequest $request)
    {
        $input = $request->all();

        $discharge = $this->dischargeRepository->create($input);

        Flash::success('Discharge saved successfully.');

        return redirect(route('admin.discharges.index'));
    }

    /**
     * Display the specified Discharge.
     */
    public function show($id)
    {
        $discharge = $this->dischargeRepository->find($id);

        if (empty($discharge)) {
            Flash::error('Discharge not found');

            return redirect(route('admin.discharges.index'));
        }

        return view('admin.discharges.show')->with('discharge', $discharge);
    }

    /**
     * Show the form for editing the specified Discharge.
     */
    public function edit($id)
    {
        $discharge = $this->dischargeRepository->find($id);

        if (empty($discharge)) {
            Flash::error('Discharge not found');

            return redirect(route('admin.discharges.index'));
        }

        return view('admin.discharges.edit')->with('discharge', $discharge);
    }

    /**
     * Update the specified Discharge in storage.
     */
    public function update($id, UpdateDischargeRequest $request)
    {
        $discharge = $this->dischargeRepository->find($id);

        if (empty($discharge)) {
            Flash::error('Discharge not found');

            return redirect(route('admin.discharges.index'));
        }

        $discharge = $this->dischargeRepository->update($request->all(), $id);

        Flash::success('Discharge updated successfully.');

        return redirect(route('admin.discharges.index'));
    }

    /**
     * Remove the specified Discharge from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $discharge = $this->dischargeRepository->find($id);

        if (empty($discharge)) {
            Flash::error('Discharge not found');

            return redirect(route('admin.discharges.index'));
        }

        $this->dischargeRepository->delete($id);

        Flash::success('Discharge deleted successfully.');

        return redirect(route('admin.discharges.index'));
    }
}
