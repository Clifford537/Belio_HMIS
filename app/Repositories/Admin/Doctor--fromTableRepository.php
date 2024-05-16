<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Doctor--fromTable;
use App\Repositories\BaseRepository;

class Doctor--fromTableRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Doctor--fromTable::class;
    }
}
