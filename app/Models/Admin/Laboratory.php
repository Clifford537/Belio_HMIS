<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Laboratory extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'laboratories';

    public $fillable = [
        'name',
        'department_id',
        'location',
        'status',
        'equipments_id',
        'technician_id'
    ];

    protected $casts = [
        'name' => 'string',
        'location' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:100',
        'department_id' => 'nullable',
        'location' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:100',
        'equipments_id' => 'nullable',
        'technician_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equipment_id');
    }


}
