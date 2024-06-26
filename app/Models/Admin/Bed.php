<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Bed extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'beds';

    public $fillable = [
        'bed_number',
        'occupancy_status',
        'ward_id',
        'bed_type_id',
        'patient_id',
        'bedside_equipment',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'bed_number' => 'string',
        'occupancy_status' => 'string',
        'bedside_equipment' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public static array $rules = [
        'bed_number' => 'required|string|max:100',
        'occupancy_status' => 'nullable|string|max:100',
        'ward_id' => 'nullable',
        'bed_type_id' => 'nullable',
        'patient_id' => 'nullable',
        'bedside_equipment' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function bedType()
    {
        return $this->belongsTo(BedType::class, 'bed_type_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }
}
