<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ImagingResult extends Model
{
    public $table = 'imaging_results';

    public $fillable = [
        'imaging_type',
        'imaging_date',
        'imaging_results',
        'technician_id',
        'radiologist_id',
        'comments',
        'image_link'
    ];

    protected $casts = [
        'imaging_type' => 'string',
        'imaging_date' => 'datetime',
        'imaging_results' => 'string',
        'radiologist_id' => 'string',
        'comments' => 'string',
        'image_link' => 'string'
    ];

    public static array $rules = [
        'imaging_type' => 'nullable|string|max:100',
        'imaging_date' => 'nullable',
        'imaging_results' => 'nullable|string|max:65535',
        'technician_id' => 'nullable',
        'radiologist_id' => 'nullable|string|max:100',
        'comments' => 'nullable|string|max:65535',
        'image_link' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function technician()
    {
        return $this->belongsTo(Technician::class, 'technician_id');
    }
    public function reportingRadiologist()
    {
        return $this->belongsTo(Radiologist::class, 'radiologist_id');
    }


}
