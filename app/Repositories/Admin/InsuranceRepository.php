<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Insurance;
use App\Repositories\BaseRepository;

class InsuranceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'insurance_company',
        'policy_number',
        'coverage_start_date',
        'coverage_end_date',
        'billing_information',
        'patient_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Insurance::class;
    }
}
