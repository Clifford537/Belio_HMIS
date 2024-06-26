<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\NextOfKinDataTable;
use App\Http\Requests\Admin\CreateNextOfKinRequest;
use App\Http\Requests\Admin\UpdateNextOfKinRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\NextOfKinRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Patient;
class NextOfKinController extends AppBaseController
{
    /** @var NextOfKinRepository $nextOfKinRepository*/
    private $nextOfKinRepository;

    public function __construct(NextOfKinRepository $nextOfKinRepo)
    {
        $this->middleware('permission:next-of-kin-list|next-of-kin-create|next-of-kin-edit|next-of-kin-delete', ['only' => ['index','store']]);
        $this->middleware('permission:next-of-kin-create', ['only' => ['create','store']]);
        $this->middleware('permission:next-of-kin-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:next-of-kin-delete', ['only' => ['destroy']]);
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
        $patients = Patient::all();
        return view('admin.next_of_kins.create',compact('patients'));
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
        $patients = Patient::all();

        if (empty($nextOfKin)) {
            Flash::error('Next Of Kin not found');

            return redirect(route('admin.nextOfKins.index'));
        }

        return view('admin.next_of_kins.edit',compact('patients'))->with('nextOfKin', $nextOfKin);
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
