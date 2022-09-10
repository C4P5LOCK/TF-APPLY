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
            'mname' =>  'nullable',
            'phone' => 'required|min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email' => 'required',
            'address1' => 'required',
            'country' => 'required',
            'state'  => 'required',
            'zip'    =>  'required',
            'institution' => 'required',
            'qualification' => 'required',
            
        ];
    }
}
