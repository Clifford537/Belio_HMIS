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
        'reporting_radiologist',
        'comments',
        'image_link'
    ];

    protected $casts = [
        'imaging_type' => 'string',
        'imaging_date' => 'datetime',
        'imaging_results' => 'string',
        'reporting_radiologist' => 'string',
        'comments' => 'string',
        'image_link' => 'string'
    ];

    public static array $rules = [
        'imaging_type' => 'nullable|string|max:100',
        'imaging_date' => 'nullable',
        'imaging_results' => 'nullable|string|max:65535',
        'technician_id' => 'nullable',
        'reporting_radiologist' => 'nullable|string|max:100',
        'comments' => 'nullable|string|max:65535',
        'image_link' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function technician(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Admin\Technician::class, 'technician_id');
    }
}
