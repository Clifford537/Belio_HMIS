<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public $table = 'titles';

    public $fillable = [
        'title'
    ];

    protected $casts = [
        'title' => 'string'
    ];

    public static array $rules = [
        'title' => 'required'
    ];

    
}
