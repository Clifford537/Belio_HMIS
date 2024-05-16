<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\BillingDataTable;
use App\Http\Requests\Admin\CreateBillingRequest;
use App\Http\Requests\Admin\UpdateBillingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\BillingRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Admission;

class BillingController extends AppBaseController
{
    /** @var BillingRepository $billingRepository*/
    private $billingRepository;

    public function __construct(BillingRepository $billingRepo)
    {
        $this->billingRepository = $billingRepo;
    }

    /**
     * Display a listing of the Billing.
     */
    public function index(BillingDataTable $billingDataTable)
    {
    return $billingDataTable->render('Admin.billings.index');
    }


    /**
     * Show the form for creating a new Billing.
     */
    public function create()
    {
        $admissions = Admission::all();
        return view('admin.billings.create', compact('admissions'));
    }

    /**
     * Store a newly created Billing in storage.
     */
    public function store(CreateBillingRequest $request)
    {
        $input = $request->all();

        $billing = $this->billingRepository->create($input);

        Flash::success('Billing saved successfully.');

        return redirect(route('admin.billings.index'));
    }

    /**
     * Display the specified Billing.
     */
    public function show($id)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Billing not found');

            return redirect(route('admin.billings.index'));
        }

        return view('admin.billings.show')->with('billing', $billing);
    }

    /**
     * Show the form for editing the specified Billing.
     */
    public function edit($id)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Billing not found');

            return redirect(route('admin.billings.index'));
        }

        return view('admin.billings.edit')->with('billing', $billing);
    }

    /**
     * Update the specified Billing in storage.
     */
    public function update($id, UpdateBillingRequest $request)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Billing not found');

            return redirect(route('admin.billings.index'));
        }

        $billing = $this->billingRepository->update($request->all(), $id);

        Flash::success('Billing updated successfully.');

        return redirect(route('admin.billings.index'));
    }

    /**
     * Remove the specified Billing from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Billing not found');

            return redirect(route('admin.billings.index'));
        }

        $this->billingRepository->delete($id);

        Flash::success('Billing deleted successfully.');

        return redirect(route('admin.billings.index'));
    }
}
