<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiplomeRequest extends FormRequest
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
            'Diplome'=>'Required|min:2|max:200',
            'Etablissement'=>'Required|min:2|max:200',
            'Date'=>'Required|date'
        ];
    }
}
