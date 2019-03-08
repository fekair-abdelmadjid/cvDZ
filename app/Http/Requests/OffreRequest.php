<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OffreRequest extends FormRequest
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
            'titre'=>'Required|min:2|max:200',
            'Presentation'=>'max:600',
            'entrprise'=>'Required|min:2|max:200',
            'Secteur'=>'max:600',
            'Lieu'=>'Required|min:2|max:600',
            'Date'=>'Required',
            'Nombre'=>'Required',
            'Niveau'=>'Required|min:2|max:600',
            'Type'=>'Required|min:2|max:600',
            'Dossier'=>'Required|min:2|max:600',
            'Adrasse'=>'max:900',
            'Telephone'=>'max:900',
            'Source'=>'max:900',
            'Profil'=>'max:900',
            'Missions'=>'max:900',
        ];
    }
}
