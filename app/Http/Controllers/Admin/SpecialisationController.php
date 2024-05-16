<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\SpecialisationDataTable;
use App\Http\Requests\Admin\CreateSpecialisationRequest;
use App\Http\Requests\Admin\UpdateSpecialisationRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\SpecialisationRepository;
use Illuminate\Http\Request;
use Flash;

class SpecialisationController extends AppBaseController
{
    /** @var SpecialisationRepository $specialisationRepository*/
    private $specialisationRepository;

    public function __construct(SpecialisationRepository $specialisationRepo)
    {
        $this->specialisationRepository = $specialisationRepo;
    }

    /**
     * Display a listing of the Specialisation.
     */
    public function index(SpecialisationDataTable $specialisationDataTable)
    {
    return $specialisationDataTable->render('Admin.specialisations.index');
    }


    /**
     * Show the form for creating a new Specialisation.
     */
    public function create()
    {
        return view('admin.specialisations.create');
    }

    /**
     * Store a newly created Specialisation in storage.
     */
    public function store(CreateSpecialisationRequest $request)
    {
        $input = $request->all();

        $specialisation = $this->specialisationRepository->create($input);

        Flash::success('Specialisation saved successfully.');

        return redirect(route('admin.specialisations.index'));
    }

    /**
     * Display the specified Specialisation.
     */
    public function show($id)
    {
        $specialisation = $this->specialisationRepository->find($id);

        if (empty($specialisation)) {
            Flash::error('Specialisation not found');

            return redirect(route('admin.specialisations.index'));
        }

        return view('admin.specialisations.show')->with('specialisation', $specialisation);
    }

    /**
     * Show the form for editing the specified Specialisation.
     */
    public function edit($id)
    {
        $specialisation = $this->specialisationRepository->find($id);

        if (empty($specialisation)) {
            Flash::error('Specialisation not found');

            return redirect(route('admin.specialisations.index'));
        }

        return view('admin.specialisations.edit')->with('specialisation', $specialisation);
    }

    /**
     * Update the specified Specialisation in storage.
     */
    public function update($id, UpdateSpecialisationRequest $request)
    {
        $specialisation = $this->specialisationRepository->find($id);

        if (empty($specialisation)) {
            Flash::error('Specialisation not found');

            return redirect(route('admin.specialisations.index'));
        }

        $specialisation = $this->specialisationRepository->update($request->all(), $id);

        Flash::success('Specialisation updated successfully.');

        return redirect(route('admin.specialisations.index'));
    }

    /**
     * Remove the specified Specialisation from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $specialisation = $this->specialisationRepository->find($id);

        if (empty($specialisation)) {
            Flash::error('Specialisation not found');

            return redirect(route('admin.specialisations.index'));
        }

        $this->specialisationRepository->delete($id);

        Flash::success('Specialisation deleted successfully.');

        return redirect(route('admin.specialisations.index'));
    }
}
