<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Discharge extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'discharges';

    public $fillable = [
        'admission_id',
        'discharge_date',
        'discharge_instructions',
        'discharge_disposition'
    ];

    protected $casts = [
        'discharge_date' => 'datetime',
        'discharge_instructions' => 'string',
        'discharge_disposition' => 'string'
    ];

    public static array $rules = [
        'admission_id' => 'nullable',
        'discharge_date' => 'nullable',
        'discharge_instructions' => 'nullable|string|max:100',
        'discharge_disposition' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public function getDischargeDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

}
