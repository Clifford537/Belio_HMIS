<?php

namespace App\Http\Requests\Admin;

use App\Models\Admin\Physician;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePhysicianRequest extends FormRequest
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
        $rules = Physician::$rules;
        
        return $rules;
    }
}
