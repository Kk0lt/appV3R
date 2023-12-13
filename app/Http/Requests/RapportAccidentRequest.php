<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RapportAccidentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'noPermis' => 'required|string',
            'checkbox_autre_vehicule' => 'required|in:Oui,Non',

            'noUnite' => 'required|min:3|string|regex:/^(?![-.]{3}$)[A-Za-z0-9\s\-]{3,}$/',
            'noPermis' => 'required|min:3|string|regex:/^(?![-.]{3}$)[A-Za-z0-9\s\-]{3,}$/',

        ];
    }

    public function messages()
    {
        return [
            'noUnite.required' => 'Le numéro d\'unité est obligatoire.',
            'noUnite.string' => 'Le numéro d\'unité doit être une chaîne de caractères.',
            'departement.required' => 'Le département est obligatoire.',
            'noPermis.required' => 'Le numéro de permis est obligatoire.',
            'noPermis.string' => 'Le numéro de permis doit être une chaîne de caractères.',
            'checkbox_autre_vehicule.required' => 'Veuillez spécifier si un autre véhicule était impliqué.',
            'checkbox_autre_vehicule.in' => 'La valeur pour un autre véhicule doit être "Oui" ou "Non".',

            'noUnite.min' => 'Le champ numéro d\'unité doit contenir au moins 3 caractères.',
            'noUnite.regex' => 'Le champ numéro d\'unité ne doit contenir que des lettres, des chiffres, des espaces et des tirets.',
            'noPermis.min' => 'Le champ numéro de permis doit contenir au moins 3 caractères.',
            'noPermis.regex' => 'Le champ numéro de permis ne doit contenir que des lettres, des chiffres, des espaces et des tirets.',
        ];
    }
}
