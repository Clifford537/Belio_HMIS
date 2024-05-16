<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    public $table = 'theatres';

    public $fillable = [
        'name',
        'theatre_status',
        'location',
        'capacity',
        'equipment_id',
        'operation_schedules',
        'next_maintenance_date',
        'last_maintenance_date',
        'doctor_incharge'
    ];

    protected $casts = [
        'name' => 'string',
        'theatre_status' => 'string',
        'location' => 'string',
        'equipment_id' => 'string',
        'operation_schedules' => 'datetime',
        'next_maintenance_date' => 'date',
        'last_maintenance_date' => 'date'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:100',
        'theatre_status' => 'nullable|string|max:100',
        'location' => 'nullable|string|max:100',
        'capacity' => 'required',
        'equipment_id' => 'nullable|string|max:65535',
        'operation_schedules' => 'nullable',
        'next_maintenance_date' => 'nullable',
        'last_maintenance_date' => 'nullable',
        'doctor_incharge' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function doctorIncharge(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\Doctor::class, 'doctor_incharge');
    }
}
