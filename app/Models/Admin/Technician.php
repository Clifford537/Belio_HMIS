<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Technician extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'technicians';

    public $fillable = [
        'first_name',
        'surname',
        'other_names',
        'gender',
        'email',
        'phone_number',
        'address'
    ];

    protected $casts = [
        'first_name' => 'string',
        'surname' => 'string',
        'other_names' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'first_name' => 'nullable|string|max:100',
        'surname' => 'nullable|string|max:100',
        'other_names' => 'nullable|string|max:100',
        'gender' => 'nullable|string|max:100',
        'email' => 'nullable|string|max:50',
        'phone_number' => 'nullable|string|max:50',
        'address' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function imagingResults(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\ImagingResult::class, 'technician_id');
    }
}
