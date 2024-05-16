<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Discharge;
use App\Repositories\BaseRepository;

class DischargeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'admission_id',
        'discharge_date',
        'discharge_instructions',
        'discharge_disposition'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Discharge::class;
    }
}
