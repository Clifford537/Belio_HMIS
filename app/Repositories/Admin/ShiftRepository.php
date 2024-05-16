<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Shift;
use App\Repositories\BaseRepository;

class ShiftRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'day_of_week',
        'time_of_day'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Shift::class;
    }
}
