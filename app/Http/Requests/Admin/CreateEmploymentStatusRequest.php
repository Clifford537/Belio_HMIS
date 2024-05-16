<?php

namespace App\Http\Requests\Admin;

use App\Models\Admin\EmploymentStatus;
use Illuminate\Foundation\Http\FormRequest;

class CreateEmploymentStatusRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return EmploymentStatus::$rules;
    }
}
