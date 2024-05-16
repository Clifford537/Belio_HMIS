<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class NextOfKin extends Model
{
    public $table = 'next_of_kins';

    public $fillable = [
        'first_name',
        'surname',
        'other_names',
        'gender',
        'phone_number',
        'address',
        'email',
        'patient_id'
    ];

    protected $casts = [
        'first_name' => 'string',
        'surname' => 'string',
        'other_names' => 'string',
        'gender' => 'string',
        'phone_number' => 'string',
        'address' => 'string',
        'email' => 'string'
    ];

    public static array $rules = [
        'first_name' => 'nullable|string|max:100',
        'surname' => 'nullable|string|max:100',
        'other_names' => 'nullable|string|max:100',
        'gender' => 'nullable|string|max:50',
        'phone_number' => 'nullable|string|max:50',
        'address' => 'nullable|string|max:100',
        'email' => 'nullable|string|max:50',
        'patient_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
