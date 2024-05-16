<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\RelationshipDataTable;
use App\Http\Requests\Admin\CreateRelationshipRequest;
use App\Http\Requests\Admin\UpdateRelationshipRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\RelationshipRepository;
use Illuminate\Http\Request;
use Flash;

class RelationshipController extends AppBaseController
{
    /** @var RelationshipRepository $relationshipRepository*/
    private $relationshipRepository;

    public function __construct(RelationshipRepository $relationshipRepo)
    {
        $this->relationshipRepository = $relationshipRepo;
    }

    /**
     * Display a listing of the Relationship.
     */
    public function index(RelationshipDataTable $relationshipDataTable)
    {
    return $relationshipDataTable->render('Admin.relationships.index');
    }


    /**
     * Show the form for creating a new Relationship.
     */
    public function create()
    {
        return view('admin.relationships.create');
    }

    /**
     * Store a newly created Relationship in storage.
     */
    public function store(CreateRelationshipRequest $request)
    {
        $input = $request->all();

        $relationship = $this->relationshipRepository->create($input);

        Flash::success('Relationship saved successfully.');

        return redirect(route('admin.relationships.index'));
    }

    /**
     * Display the specified Relationship.
     */
    public function show($id)
    {
        $relationship = $this->relationshipRepository->find($id);

        if (empty($relationship)) {
            Flash::error('Relationship not found');

            return redirect(route('admin.relationships.index'));
        }

        return view('admin.relationships.show')->with('relationship', $relationship);
    }

    /**
     * Show the form for editing the specified Relationship.
     */
    public function edit($id)
    {
        $relationship = $this->relationshipRepository->find($id);

        if (empty($relationship)) {
            Flash::error('Relationship not found');

            return redirect(route('admin.relationships.index'));
        }

        return view('admin.relationships.edit')->with('relationship', $relationship);
    }

    /**
     * Update the specified Relationship in storage.
     */
    public function update($id, UpdateRelationshipRequest $request)
    {
        $relationship = $this->relationshipRepository->find($id);

        if (empty($relationship)) {
            Flash::error('Relationship not found');

            return redirect(route('admin.relationships.index'));
        }

        $relationship = $this->relationshipRepository->update($request->all(), $id);

        Flash::success('Relationship updated successfully.');

        return redirect(route('admin.relationships.index'));
    }

    /**
     * Remove the specified Relationship from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $relationship = $this->relationshipRepository->find($id);

        if (empty($relationship)) {
            Flash::error('Relationship not found');

            return redirect(route('admin.relationships.index'));
        }

        $this->relationshipRepository->delete($id);

        Flash::success('Relationship deleted successfully.');

        return redirect(route('admin.relationships.index'));
    }
}
