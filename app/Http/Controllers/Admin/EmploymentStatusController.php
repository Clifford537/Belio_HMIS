<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\EmploymentStatusDataTable;
use App\Http\Requests\Admin\CreateEmploymentStatusRequest;
use App\Http\Requests\Admin\UpdateEmploymentStatusRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\EmploymentStatusRepository;
use Illuminate\Http\Request;
use Flash;

class EmploymentStatusController extends AppBaseController
{
    /** @var EmploymentStatusRepository $employmentStatusRepository*/
    private $employmentStatusRepository;

    public function __construct(EmploymentStatusRepository $employmentStatusRepo)
    {
        $this->employmentStatusRepository = $employmentStatusRepo;
    }

    /**
     * Display a listing of the EmploymentStatus.
     */
    public function index(EmploymentStatusDataTable $employmentStatusDataTable)
    {
    return $employmentStatusDataTable->render('Admin.employment_statuses.index');
    }


    /**
     * Show the form for creating a new EmploymentStatus.
     */
    public function create()
    {
        return view('admin.employment_statuses.create');
    }

    /**
     * Store a newly created EmploymentStatus in storage.
     */
    public function store(CreateEmploymentStatusRequest $request)
    {
        $input = $request->all();

        $employmentStatus = $this->employmentStatusRepository->create($input);

        Flash::success('Employment Status saved successfully.');

        return redirect(route('admin.employmentStatuses.index'));
    }

    /**
     * Display the specified EmploymentStatus.
     */
    public function show($id)
    {
        $employmentStatus = $this->employmentStatusRepository->find($id);

        if (empty($employmentStatus)) {
            Flash::error('Employment Status not found');

            return redirect(route('admin.employmentStatuses.index'));
        }

        return view('admin.employment_statuses.show')->with('employmentStatus', $employmentStatus);
    }

    /**
     * Show the form for editing the specified EmploymentStatus.
     */
    public function edit($id)
    {
        $employmentStatus = $this->employmentStatusRepository->find($id);

        if (empty($employmentStatus)) {
            Flash::error('Employment Status not found');

            return redirect(route('admin.employmentStatuses.index'));
        }

        return view('admin.employment_statuses.edit')->with('employmentStatus', $employmentStatus);
    }

    /**
     * Update the specified EmploymentStatus in storage.
     */
    public function update($id, UpdateEmploymentStatusRequest $request)
    {
        $employmentStatus = $this->employmentStatusRepository->find($id);

        if (empty($employmentStatus)) {
            Flash::error('Employment Status not found');

            return redirect(route('admin.employmentStatuses.index'));
        }

        $employmentStatus = $this->employmentStatusRepository->update($request->all(), $id);

        Flash::success('Employment Status updated successfully.');

        return redirect(route('admin.employmentStatuses.index'));
    }

    /**
     * Remove the specified EmploymentStatus from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $employmentStatus = $this->employmentStatusRepository->find($id);

        if (empty($employmentStatus)) {
            Flash::error('Employment Status not found');

            return redirect(route('admin.employmentStatuses.index'));
        }

        $this->employmentStatusRepository->delete($id);

        Flash::success('Employment Status deleted successfully.');

        return redirect(route('admin.employmentStatuses.index'));
    }
}
