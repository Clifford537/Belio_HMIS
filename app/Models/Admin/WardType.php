<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class WardType extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

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
