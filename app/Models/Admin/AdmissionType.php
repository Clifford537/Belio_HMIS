<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdmissionType extends Model
{
    public $table = 'admission_types';

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

    public function admissions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\Admission::class, 'admission_types_id');
    }
}
