<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Billing;
use App\Repositories\BaseRepository;

class BillingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'admission_id',
        'billing_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Billing::class;
    }
}
