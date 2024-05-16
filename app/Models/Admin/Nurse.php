<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    public $table = 'nurses';

    public $fillable = [
        'first_name',
        'surname',
        'other_names',
        'gender',
        'date_of_birth',
        'phone_number',
        'address',
        'certification',
        'department_id',
        'shift_id',
        'email'
    ];

    protected $casts = [
        'first_name' => 'string',
        'surname' => 'string',
        'other_names' => 'string',
        'gender' => 'boolean',
        'date_of_birth' => 'date',
        'phone_number' => 'string',
        'address' => 'string',
        'certification' => 'string',
        'email' => 'string'
    ];

    public static array $rules = [
        'first_name' => 'nullable|string|max:100',
        'surname' => 'nullable|string|max:100',
        'other_names' => 'nullable|string|max:100',
        'gender' => 'nullable|boolean',
        'date_of_birth' => 'nullable',
        'phone_number' => 'nullable|string|max:50',
        'address' => 'nullable|string|max:100',
        'certification' => 'nullable|string|max:100',
        'department_id' => 'nullable',
        'shift_id' => 'nullable',
        'email' => 'nullable|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function shift(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\Shift::class, 'shift_id');
    }

    public function patients(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\Patient::class, 'nurse_id');
    }
}
