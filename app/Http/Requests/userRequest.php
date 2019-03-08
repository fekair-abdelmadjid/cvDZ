<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class userRequest extends FormRequest
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
            'name' => 'Required|min:3|max:60',
            'email' => 'Required',
            'FamilyName' => 'Required|min:3|max:200',
            'FirstName' => 'Required|min:3|max:200',
            'Phone' => 'Required|min:3|max:200',
            'Adresse' => 'Required|min:3|max:300'


        ];
    }
}
