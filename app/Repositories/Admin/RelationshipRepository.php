<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Relationship;
use App\Repositories\BaseRepository;

class RelationshipRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'relationship'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Relationship::class;
    }
}
