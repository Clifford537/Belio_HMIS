<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Billing extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'billings';

    public $fillable = [
        'admission_id',
        'billing_date'
    ];

    protected $casts = [
        'billing_date' => 'datetime'
    ];

    public static array $rules = [
        'admission_id' => 'nullable',
        'billing_date' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function admission(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\Admission::class, 'admission_id');
    }
    public function getBillingDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }
}
