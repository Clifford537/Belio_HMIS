<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Specialisation extends Model
{
    public $table = 'specializations';

    public $fillable = [
        'specialty'
    ];

    protected $casts = [
        'specialty' => 'string'
    ];

    public static array $rules = [
        'specialty' => 'required|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
