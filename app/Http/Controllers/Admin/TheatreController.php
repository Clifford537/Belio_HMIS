<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\TheatreDataTable;
use App\Http\Requests\Admin\CreateTheatreRequest;
use App\Http\Requests\Admin\UpdateTheatreRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\TheatreRepository;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\Doctor;

class TheatreController extends AppBaseController
{
    /** @var TheatreRepository $theatreRepository*/
    private $theatreRepository;

    public function __construct(TheatreRepository $theatreRepo)
    {
        $this->middleware('permission:theatres-list|theatres-create|theatres-edit|theatres-delete', ['only' => ['index','store']]);
        $this->middleware('permission:theatres-create', ['only' => ['create','store']]);
        $this->middleware('permission:theatres-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:theatres-delete', ['only' => ['destroy']]);
        $this->theatreRepository = $theatreRepo;
    }

    /**
     * Display a listing of the Theatre.
     */
    public function index(TheatreDataTable $theatreDataTable)
    {
    return $theatreDataTable->render('Admin.theatres.index');
    }


    /**
     * Show the form for creating a new Theatre.
     */
    public function create()
    {
        $doctor = Doctor::all();
        return view('admin.theatres.create',compact('doctor'));
    }

    /**
     * Store a newly created Theatre in storage.
     */
    public function store(CreateTheatreRequest $request)
    {
        $input = $request->all();

        $theatre = $this->theatreRepository->create($input);

        Flash::success('Theatre saved successfully.');

        return redirect(route('admin.theatres.index'));
    }

    /**
     * Display the specified Theatre.
     */
    public function show($id)
    {
        $theatre = $this->theatreRepository->find($id);

        if (empty($theatre)) {
            Flash::error('Theatre not found');

            return redirect(route('admin.theatres.index'));
        }

        return view('admin.theatres.show')->with('theatre', $theatre);
    }

    /**
     * Show the form for editing the specified Theatre.
     */
    public function edit($id)
    {
        $theatre = $this->theatreRepository->find($id);
        $doctor = Doctor::all();


        if (empty($theatre)) {
            Flash::error('Theatre not found');

            return redirect(route('admin.theatres.index'));
        }

        return view('admin.theatres.edit',compact('doctor'))->with('theatre', $theatre);
    }

    /**
     * Update the specified Theatre in storage.
     */
    public function update($id, UpdateTheatreRequest $request)
    {
        $theatre = $this->theatreRepository->find($id);

        if (empty($theatre)) {
            Flash::error('Theatre not found');

            return redirect(route('admin.theatres.index'));
        }

        $theatre = $this->theatreRepository->update($request->all(), $id);

        Flash::success('Theatre updated successfully.');

        return redirect(route('admin.theatres.index'));
    }

    /**
     * Remove the specified Theatre from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $theatre = $this->theatreRepository->find($id);

        if (empty($theatre)) {
            Flash::error('Theatre not found');

            return redirect(route('admin.theatres.index'));
        }

        $this->theatreRepository->delete($id);

        Flash::success('Theatre deleted successfully.');

        return redirect(route('admin.theatres.index'));
    }
}
