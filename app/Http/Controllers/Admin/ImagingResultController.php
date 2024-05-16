<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ImagingResultDataTable;
use App\Http\Requests\Admin\CreateImagingResultRequest;
use App\Http\Requests\Admin\UpdateImagingResultRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\ImagingResultRepository;
use Illuminate\Http\Request;
use Flash;

class ImagingResultController extends AppBaseController
{
    /** @var ImagingResultRepository $imagingResultRepository*/
    private $imagingResultRepository;

    public function __construct(ImagingResultRepository $imagingResultRepo)
    {
        $this->imagingResultRepository = $imagingResultRepo;
    }

    /**
     * Display a listing of the ImagingResult.
     */
    public function index(ImagingResultDataTable $imagingResultDataTable)
    {
    return $imagingResultDataTable->render('Admin.imaging_results.index');
    }


    /**
     * Show the form for creating a new ImagingResult.
     */
    public function create()
    {
        return view('admin.imaging_results.create');
    }

    /**
     * Store a newly created ImagingResult in storage.
     */
    public function store(CreateImagingResultRequest $request)
    {
        $input = $request->all();

        $imagingResult = $this->imagingResultRepository->create($input);

        Flash::success('Imaging Result saved successfully.');

        return redirect(route('admin.imagingResults.index'));
    }

    /**
     * Display the specified ImagingResult.
     */
    public function show($id)
    {
        $imagingResult = $this->imagingResultRepository->find($id);

        if (empty($imagingResult)) {
            Flash::error('Imaging Result not found');

            return redirect(route('admin.imagingResults.index'));
        }

        return view('admin.imaging_results.show')->with('imagingResult', $imagingResult);
    }

    /**
     * Show the form for editing the specified ImagingResult.
     */
    public function edit($id)
    {
        $imagingResult = $this->imagingResultRepository->find($id);

        if (empty($imagingResult)) {
            Flash::error('Imaging Result not found');

            return redirect(route('admin.imagingResults.index'));
        }

        return view('admin.imaging_results.edit')->with('imagingResult', $imagingResult);
    }

    /**
     * Update the specified ImagingResult in storage.
     */
    public function update($id, UpdateImagingResultRequest $request)
    {
        $imagingResult = $this->imagingResultRepository->find($id);

        if (empty($imagingResult)) {
            Flash::error('Imaging Result not found');

            return redirect(route('admin.imagingResults.index'));
        }

        $imagingResult = $this->imagingResultRepository->update($request->all(), $id);

        Flash::success('Imaging Result updated successfully.');

        return redirect(route('admin.imagingResults.index'));
    }

    /**
     * Remove the specified ImagingResult from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $imagingResult = $this->imagingResultRepository->find($id);

        if (empty($imagingResult)) {
            Flash::error('Imaging Result not found');

            return redirect(route('admin.imagingResults.index'));
        }

        $this->imagingResultRepository->delete($id);

        Flash::success('Imaging Result deleted successfully.');

        return redirect(route('admin.imagingResults.index'));
    }
}
