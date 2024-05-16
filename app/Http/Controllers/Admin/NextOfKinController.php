<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\NextOfKinDataTable;
use App\Http\Requests\Admin\CreateNextOfKinRequest;
use App\Http\Requests\Admin\UpdateNextOfKinRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\NextOfKinRepository;
use Illuminate\Http\Request;
use Flash;

class NextOfKinController extends AppBaseController
{
    /** @var NextOfKinRepository $nextOfKinRepository*/
    private $nextOfKinRepository;

    public function __construct(NextOfKinRepository $nextOfKinRepo)
    {
        $this->nextOfKinRepository = $nextOfKinRepo;
    }

    /**
     * Display a listing of the NextOfKin.
     */
    public function index(NextOfKinDataTable $nextOfKinDataTable)
    {
    return $nextOfKinDataTable->render('Admin.next_of_kins.index');
    }


    /**
     * Show the form for creating a new NextOfKin.
     */
    public function create()
    {
        return view('admin.next_of_kins.create');
    }

    /**
     * Store a newly created NextOfKin in storage.
     */
    public function store(CreateNextOfKinRequest $request)
    {
        $input = $request->all();

        $nextOfKin = $this->nextOfKinRepository->create($input);

        Flash::success('Next Of Kin saved successfully.');

        return redirect(route('admin.nextOfKins.index'));
    }

    /**
     * Display the specified NextOfKin.
     */
    public function show($id)
    {
        $nextOfKin = $this->nextOfKinRepository->find($id);

        if (empty($nextOfKin)) {
            Flash::error('Next Of Kin not found');

            return redirect(route('admin.nextOfKins.index'));
        }

        return view('admin.next_of_kins.show')->with('nextOfKin', $nextOfKin);
    }

    /**
     * Show the form for editing the specified NextOfKin.
     */
    public function edit($id)
    {
        $nextOfKin = $this->nextOfKinRepository->find($id);

        if (empty($nextOfKin)) {
            Flash::error('Next Of Kin not found');

            return redirect(route('admin.nextOfKins.index'));
        }

        return view('admin.next_of_kins.edit')->with('nextOfKin', $nextOfKin);
    }

    /**
     * Update the specified NextOfKin in storage.
     */
    public function update($id, UpdateNextOfKinRequest $request)
    {
        $nextOfKin = $this->nextOfKinRepository->find($id);

        if (empty($nextOfKin)) {
            Flash::error('Next Of Kin not found');

            return redirect(route('admin.nextOfKins.index'));
        }

        $nextOfKin = $this->nextOfKinRepository->update($request->all(), $id);

        Flash::success('Next Of Kin updated successfully.');

        return redirect(route('admin.nextOfKins.index'));
    }

    /**
     * Remove the specified NextOfKin from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nextOfKin = $this->nextOfKinRepository->find($id);

        if (empty($nextOfKin)) {
            Flash::error('Next Of Kin not found');

            return redirect(route('admin.nextOfKins.index'));
        }

        $this->nextOfKinRepository->delete($id);

        Flash::success('Next Of Kin deleted successfully.');

        return redirect(route('admin.nextOfKins.index'));
    }
}
