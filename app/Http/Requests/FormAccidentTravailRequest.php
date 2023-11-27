<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAccidentTravailRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'date' => 'required|date',
            'heure' => 'required',
            'temoin' => 'required',
            'nom_temoin' => 'required_if:temoin,Oui',
            'num_temoin' => 'required_if:temoin,Oui',
            'endroit' => 'required',
            'secteur' => 'required',
            'blessure_tete' => 'required',
            'blessure_torse' => 'required',
            'blessure_poumon' => 'required',
            'blessure_bras' => 'required',
            'blessure_poignets' => 'required',
            'blessure_dos' => 'required',
            'blessure_hanche' => 'required',
            'blessure_jambe' => 'required',
            'blessure_pied' => 'required',
            'blessure_autre' => 'required_if:description_blessure,Autres',
            'description_blessure' => 'required|max:500',
            'violence' => 'required',
            'tache' => 'required',
            'soin' => 'required',
            'secouriste' => 'required',
            'absence' => 'required',
            'superieur' => 'required',
        ];
    }
}
