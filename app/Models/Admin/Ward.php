<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Ward extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'wards';

    public $fillable = [
        'description',
        'ward_type_id',
        'capacity',
        'location',
        'status',
        'nurse_id'
    ];

    protected $casts = [
        'description' => 'string',
        'location' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'description' => 'nullable|string|max:100',
        'ward_type_id' => 'nullable',
        'capacity' => 'nullable',
        'location' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:100',
        'nurse_id' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];
    public function wardType()
    {
        return $this->belongsTo(wardType::class, 'ward_type_id');
    }

    public function Nurse()
    {
        return $this->belongsTo(Nurse::class);
    }


}
