<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Insurance extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'insurances';

    public $fillable = [
        'insurance_company',
        'policy_number',
        'coverage_start_date',
        'coverage_end_date',
        'billing_information',
        'patient_id'
    ];

    protected $casts = [
        'insurance_company' => 'string',
        'coverage_start_date' => 'date',
        'coverage_end_date' => 'date',
        'billing_information' => 'string'
    ];

    public static array $rules = [
        'insurance_company' => 'nullable|string|max:100',
        'policy_number' => 'nullable',
        'coverage_start_date' => 'nullable',
        'coverage_end_date' => 'nullable',
        'billing_information' => 'nullable|string|max:100',
        'patient_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function Patient()
    {
        return $this->belongsTo(Patient::class);


}
    public function getCoverageStartDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }
    public function getCoverageEndDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }
}
