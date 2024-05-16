<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\BedDataTable;
use App\Http\Requests\Admin\CreateBedRequest;
use App\Http\Requests\Admin\UpdateBedRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\BedRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Ward;
use App\Models\Admin\Bed_Type;
use App\Models\Admin\Patient;
class BedController extends AppBaseController
{
    /** @var BedRepository $bedRepository*/
    private $bedRepository;

    public function __construct(BedRepository $bedRepo)
    {
        $this->bedRepository = $bedRepo;
    }

    /**
     * Display a listing of the Bed.
     */
    public function index(BedDataTable $bedDataTable)
    {
    return $bedDataTable->render('Admin.beds.index');
    }


    /**
     * Show the form for creating a new Bed.
     */
    public function create()
    {
        $wards = Ward::all(); // plural to indicate collection
        $bedTypes = Bed_Type::all(); // plural to indicate collection
        $patients = Patient::all(); // plural to indicate collection
    
        return view('admin.beds.create', compact('wards', 'bedTypes', 'patients'));
    }
    
    /**
     * Store a newly created Bed in storage.
     */
    public function store(CreateBedRequest $request)
    {
        $input = $request->all();

        $bed = $this->bedRepository->create($input);

        Flash::success('Bed saved successfully.');

        return redirect(route('admin.beds.index'));
    }

    /**
     * Display the specified Bed.
     */
    public function show($id)
    {
        $bed = $this->bedRepository->find($id);

        if (empty($bed)) {
            Flash::error('Bed not found');

            return redirect(route('admin.beds.index'));
        }

        return view('admin.beds.show')->with('bed', $bed);
    }

    /**
     * Show the form for editing the specified Bed.
     */
    public function edit($id)
    {
        $bed = $this->bedRepository->find($id);

        if (empty($bed)) {
            Flash::error('Bed not found');

            return redirect(route('admin.beds.index'));
        }

        return view('admin.beds.edit')->with('bed', $bed);
    }

    /**
     * Update the specified Bed in storage.
     */
    public function update($id, UpdateBedRequest $request)
    {
        $bed = $this->bedRepository->find($id);

        if (empty($bed)) {
            Flash::error('Bed not found');

            return redirect(route('admin.beds.index'));
        }

        $bed = $this->bedRepository->update($request->all(), $id);

        Flash::success('Bed updated successfully.');

        return redirect(route('admin.beds.index'));
    }

    /**
     * Remove the specified Bed from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bed = $this->bedRepository->find($id);

        if (empty($bed)) {
            Flash::error('Bed not found');

            return redirect(route('admin.beds.index'));
        }

        $this->bedRepository->delete($id);

        Flash::success('Bed deleted successfully.');

        return redirect(route('admin.beds.index'));
    }
}
