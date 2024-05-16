<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
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
}
