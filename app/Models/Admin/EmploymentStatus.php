<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class EmploymentStatus extends Model
{
    public $table = 'employment_statuses';

    public $fillable = [
        'status'
    ];

    protected $casts = [
        'status' => 'string'
    ];

    public static array $rules = [
        'status' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
