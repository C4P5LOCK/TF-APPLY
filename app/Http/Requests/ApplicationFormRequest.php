<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationFormRequest extends FormRequest
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
            'fname' => 'required',
            'lname' =>  'required',
            'mname' =>  'required',
            'phone' => 'required',
            'email' => 'required',
            'address1' => 'required',
            'country' => 'required',
            'state'  => 'required',
            'zip'    =>  'required',
            'institution' => 'required',
            'qua;ification' => 'required',
            
        ];
    }
}
