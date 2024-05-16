<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class WardType extends Model
{
    public $table = 'ward_types';

    public $fillable = [
        'type'
    ];

    protected $casts = [
        'type' => 'string'
    ];

    public static array $rules = [
        'type' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
