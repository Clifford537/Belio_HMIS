<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public $table = 'cards';

    public $fillable = [
        'title',
        'description',
        'image_url'
    ];

    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'image_url' => 'string'
    ];

    public static array $rules = [
        'title' => 'required|max:255',
        'description' => 'required|max:255',
        'image_url' => 'required|max:255'
    ];

    
}
