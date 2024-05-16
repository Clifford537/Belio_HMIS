<?php

namespace App\Repositories\Admin;

use App\Models\Admin\AdmissionChecklist;
use App\Repositories\BaseRepository;

class AdmissionChecklistRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'checklist',
        'ward_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return AdmissionChecklist::class;
    }
}
