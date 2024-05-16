<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\InsuranceDataTable;
use App\Http\Requests\Admin\CreateInsuranceRequest;
use App\Http\Requests\Admin\UpdateInsuranceRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\InsuranceRepository;
use Illuminate\Http\Request;
use Flash;

class InsuranceController extends AppBaseController
{
    /** @var InsuranceRepository $insuranceRepository*/
    private $insuranceRepository;

    public function __construct(InsuranceRepository $insuranceRepo)
    {
        $this->insuranceRepository = $insuranceRepo;
    }

    /**
     * Display a listing of the Insurance.
     */
    public function index(InsuranceDataTable $insuranceDataTable)
    {
    return $insuranceDataTable->render('Admin.insurances.index');
    }


    /**
     * Show the form for creating a new Insurance.
     */
    public function create()
    {
        return view('admin.insurances.create');
    }

    /**
     * Store a newly created Insurance in storage.
     */
    public function store(CreateInsuranceRequest $request)
    {
        $input = $request->all();

        $insurance = $this->insuranceRepository->create($input);

        Flash::success('Insurance saved successfully.');

        return redirect(route('admin.insurances.index'));
    }

    /**
     * Display the specified Insurance.
     */
    public function show($id)
    {
        $insurance = $this->insuranceRepository->find($id);

        if (empty($insurance)) {
            Flash::error('Insurance not found');

            return redirect(route('admin.insurances.index'));
        }

        return view('admin.insurances.show')->with('insurance', $insurance);
    }

    /**
     * Show the form for editing the specified Insurance.
     */
    public function edit($id)
    {
        $insurance = $this->insuranceRepository->find($id);

        if (empty($insurance)) {
            Flash::error('Insurance not found');

            return redirect(route('admin.insurances.index'));
        }

        return view('admin.insurances.edit')->with('insurance', $insurance);
    }

    /**
     * Update the specified Insurance in storage.
     */
    public function update($id, UpdateInsuranceRequest $request)
    {
        $insurance = $this->insuranceRepository->find($id);

        if (empty($insurance)) {
            Flash::error('Insurance not found');

            return redirect(route('admin.insurances.index'));
        }

        $insurance = $this->insuranceRepository->update($request->all(), $id);

        Flash::success('Insurance updated successfully.');

        return redirect(route('admin.insurances.index'));
    }

    /**
     * Remove the specified Insurance from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $insurance = $this->insuranceRepository->find($id);

        if (empty($insurance)) {
            Flash::error('Insurance not found');

            return redirect(route('admin.insurances.index'));
        }

        $this->insuranceRepository->delete($id);

        Flash::success('Insurance deleted successfully.');

        return redirect(route('admin.insurances.index'));
    }
}
