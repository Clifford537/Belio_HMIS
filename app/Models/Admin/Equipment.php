<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    public $table = 'equipment';

    public $fillable = [
        'name',
        'type',
        'serial_number',
        'manufacturer',
        'model',
        'purchase_date',
        'warranty_expiry_date',
        'location',
        'status',
        'last_maintenance_date',
        'next_maintenance_date',
        'cost',
        'notes',
        'laboratory_id'
    ];

    protected $casts = [
        'name' => 'string',
        'type' => 'string',
        'serial_number' => 'string',
        'manufacturer' => 'string',
        'model' => 'string',
        'purchase_date' => 'date',
        'warranty_expiry_date' => 'date',
        'location' => 'string',
        'status' => 'string',
        'last_maintenance_date' => 'date',
        'next_maintenance_date' => 'date',
        'cost' => 'decimal:0',
        'notes' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:100',
        'type' => 'nullable|string|max:100',
        'serial_number' => 'nullable|string|max:100',
        'manufacturer' => 'nullable|string|max:100',
        'model' => 'nullable|string|max:100',
        'purchase_date' => 'nullable',
        'warranty_expiry_date' => 'nullable',
        'location' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:50',
        'last_maintenance_date' => 'nullable',
        'next_maintenance_date' => 'nullable',
        'cost' => 'nullable|numeric',
        'notes' => 'nullable|string|max:65535',
        'laboratory_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function laboratory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\Laboratory::class, 'laboratory_id');
    }
}
