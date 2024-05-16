<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ShiftDataTable;
use App\Http\Requests\Admin\CreateShiftRequest;
use App\Http\Requests\Admin\UpdateShiftRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\ShiftRepository;
use Illuminate\Http\Request;
use Flash;

class ShiftController extends AppBaseController
{
    /** @var ShiftRepository $shiftRepository*/
    private $shiftRepository;

    public function __construct(ShiftRepository $shiftRepo)
    {
        $this->shiftRepository = $shiftRepo;
    }

    /**
     * Display a listing of the Shift.
     */
    public function index(ShiftDataTable $shiftDataTable)
    {
    return $shiftDataTable->render('Admin.shifts.index');
    }


    /**
     * Show the form for creating a new Shift.
     */
    public function create()
    {
        return view('admin.shifts.create');
    }

    /**
     * Store a newly created Shift in storage.
     */
    public function store(CreateShiftRequest $request)
    {
        $input = $request->all();

        $shift = $this->shiftRepository->create($input);

        Flash::success('Shift saved successfully.');

        return redirect(route('admin.shifts.index'));
    }

    /**
     * Display the specified Shift.
     */
    public function show($id)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('admin.shifts.index'));
        }

        return view('admin.shifts.show')->with('shift', $shift);
    }

    /**
     * Show the form for editing the specified Shift.
     */
    public function edit($id)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('admin.shifts.index'));
        }

        return view('admin.shifts.edit')->with('shift', $shift);
    }

    /**
     * Update the specified Shift in storage.
     */
    public function update($id, UpdateShiftRequest $request)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('admin.shifts.index'));
        }

        $shift = $this->shiftRepository->update($request->all(), $id);

        Flash::success('Shift updated successfully.');

        return redirect(route('admin.shifts.index'));
    }

    /**
     * Remove the specified Shift from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $shift = $this->shiftRepository->find($id);

        if (empty($shift)) {
            Flash::error('Shift not found');

            return redirect(route('admin.shifts.index'));
        }

        $this->shiftRepository->delete($id);

        Flash::success('Shift deleted successfully.');

        return redirect(route('admin.shifts.index'));
    }
}
