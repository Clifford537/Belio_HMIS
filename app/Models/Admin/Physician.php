<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Physician extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'physicians';

    public $fillable = [
        'first_name',
        'surname',
        'other_names',
        'specialization_id',
        'address',
        'clinic_hospital',
        'procedure_id'
    ];

    protected $casts = [
        'first_name' => 'string',
        'surname' => 'string',
        'other_names' => 'string',
        'specialty' => 'string',
        'address' => 'string',
        'clinic_hospital' => 'string'
    ];

    public static array $rules = [
        'first_name' => 'nullable|string|max:100',
        'surname' => 'nullable|string|max:100',
        'other_names' => 'nullable|string|max:100',
        'specialization_id' => 'nullable',
        'address' => 'nullable|string|max:100',
        'clinic_hospital' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'procedure_id' => 'nullable'
    ];

    public function procedure(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\RadiologyProcedure::class, 'procedure_id');
    }
    public function specialisation()
    {
        return $this->belongsTo(Specialisation::class, 'specialization_id');
    }
}
