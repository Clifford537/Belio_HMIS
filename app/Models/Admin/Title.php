<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Title extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

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
