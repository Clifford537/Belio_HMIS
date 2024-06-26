<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Relationship extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'relationships';

    public $fillable = [
        'relationship'
    ];

    protected $casts = [
        'relationship' => 'string'
    ];

    public static array $rules = [
        'relationship' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
