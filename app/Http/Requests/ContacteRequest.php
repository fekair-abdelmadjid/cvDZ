<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContacteRequest extends FormRequest
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
           'email'=>'Required|email',
            'titre'=>'Required|min:2|max:400',
            'message'=>'Required|min:2|max:600'
        ];
    }
}
