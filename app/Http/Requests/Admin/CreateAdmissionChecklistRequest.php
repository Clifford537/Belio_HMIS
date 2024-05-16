<?php

namespace App\Http\Requests\Admin;

use App\Models\Admin\AdmissionChecklist;
use Illuminate\Foundation\Http\FormRequest;

class CreateAdmissionChecklistRequest extends FormRequest
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
        return AdmissionChecklist::$rules;
    }
}
