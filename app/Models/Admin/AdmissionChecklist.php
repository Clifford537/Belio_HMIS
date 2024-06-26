<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class AdmissionChecklist extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'admission_checklists';

    public $fillable = [
        'checklist',
        'ward_id'
    ];

    protected $casts = [
        'checklist' => 'string'
    ];

    public static array $rules = [
        'checklist' => 'required|string|max:65535',
        'ward_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public function ward()
    {
        return $this->belongsTo(ward::class, 'ward_id');
    }


}
