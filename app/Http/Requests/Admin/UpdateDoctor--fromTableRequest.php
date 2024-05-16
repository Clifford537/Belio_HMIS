<?php

namespace App\Http\Requests\Admin;

use App\Models\Admin\Doctor--fromTable;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctor--fromTableRequest extends FormRequest
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
        $rules = Doctor--fromTable::$rules;
        
        return $rules;
    }
}
