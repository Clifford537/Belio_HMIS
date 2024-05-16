<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Bed_Type extends Model
{
    public $table = 'bed_types';

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

    public function beds(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\Bed::class, 'bed_type_id');
    }
}
