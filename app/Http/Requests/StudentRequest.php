<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'fullname'=>'required',
            'email'=>'required|email',
            'address'=>'required|max:250',
            'number'=>'required|min:11|numeric',
        ];
    }
    public function messages()
    {
  
        return [
                'fullname.required'=>'Allow only letter',
                'email.required'=>'enter proper format',
                'address.required'=>'Max world 250',
                'number.required'=>'Number in digit',
        ];
    }
}
