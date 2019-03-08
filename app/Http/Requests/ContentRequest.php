<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'titreex'=>'Required|min:2|max:200',
            'DateDebutex'=>'Required|date',
            'NomEntrepriseex'=>'Required|min:2|max:200'
        ];
    }
}
