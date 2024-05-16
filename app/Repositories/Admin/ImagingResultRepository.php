<?php

namespace App\Repositories\Admin;

use App\Models\Admin\ImagingResult;
use App\Repositories\BaseRepository;

class ImagingResultRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'imaging_type',
        'imaging_date',
        'imaging_results',
        'technician_id',
        'reporting_radiologist',
        'comments',
        'image_link'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return ImagingResult::class;
    }
}
