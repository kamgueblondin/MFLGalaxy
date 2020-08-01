<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnqueryResquest extends FormRequest
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
        return [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'number' => 'required',
            'parent' => 'required',
            'age' => 'required',
            'grade' => 'required',
            'choice' => 'required',
            'primary_course' => 'required',
            'additional_course' => 'required',
            'gender' => 'required',
        ];
    }
}
