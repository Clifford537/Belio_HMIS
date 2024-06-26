<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Radiologist extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'radiologists';

    public $fillable = [
        'name',
        'specialization',
        'phone_number',
        'email',
        'department_id'
    ];

    protected $casts = [
        'name' => 'string',
        'specialization' => 'string',
        'phone_number' => 'string',
        'email' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:100',
        'specialization' => 'nullable|string|max:100',
        'phone_number' => 'nullable|string|max:50',
        'email' => 'nullable|string|max:50',
        'department_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\Department::class, 'department_id');
    }
    public function specialisation()
    {
        return $this->belongsTo(Specialisation::class, 'specialization_id');
    }
}
