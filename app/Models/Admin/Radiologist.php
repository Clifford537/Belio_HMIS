<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Radiologist extends Model
{
    public $table = 'radiologists';

    public $fillable = [
        'name',
        'specialization',
        'phone_number',
        'email',
        'department_id'
    ];

    protected $casts = [
        'name' => 'string',
        'specialization' => 'string',
        'phone_number' => 'string',
        'email' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:100',
        'specialization' => 'nullable|string|max:100',
        'phone_number' => 'nullable|string|max:50',
        'email' => 'nullable|string|max:50',
        'department_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\Department::class, 'department_id');
    }
}
