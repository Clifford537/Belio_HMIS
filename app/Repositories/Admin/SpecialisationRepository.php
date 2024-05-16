<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Specialisation;
use App\Repositories\BaseRepository;

class SpecialisationRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'specialty'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Specialisation::class;
    }
}
