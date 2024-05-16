<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public $table = 'shifts';

    public $fillable = [
        'day_of_week',
        'time_of_day'
    ];

    protected $casts = [
        'day_of_week' => 'date'
    ];

    public static array $rules = [
        'day_of_week' => 'nullable',
        'time_of_day' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function nurses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Admin\Nurse::class, 'shift_id');
    }
}
