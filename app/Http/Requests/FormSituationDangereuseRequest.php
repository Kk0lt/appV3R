<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormSituationDangereuseRequest extends FormRequest
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
            'date' => 'required|date',
            'heure' => 'required',
            'temoin' => 'required|in:Oui,Non',
            'nom_temoin' => 'nullable|required_if:temoin,Oui|string|max:255',
            'description' => 'required|string',
            'corrections' => 'required|string',
            'checkbox_sup' => 'required|in:Oui,Non',
        ];
    }

    public function messages()
    {
        return [
            'date.required' => 'La date de l\'accident est obligatoire.',
            'date.date' => 'La date de l\'accident doit être une date valide.',
            'heure.required' => 'L\'heure de l\'accident est obligatoire.',
            'temoin.required' => 'Veuillez spécifier si un témoin était présent.',
            'temoin.in' => 'La valeur du témoin doit être "Oui" ou "Non".',
            'nom_temoin.required_if' => 'Le nom du témoin est obligatoire si un témoin était présent.',
            'nom_temoin.string' => 'Le nom du témoin doit être une chaîne de caractères.',
            'nom_temoin.max' => 'Le nom du témoin ne peut pas dépasser :max caractères.',
            'description.required' => 'La description est obligatoire.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'corrections.required' => 'Les corrections sont obligatoires.',
            'corrections.string' => 'Les corrections doivent être une chaîne de caractères.',
            'checkbox_sup.required' => 'Veuillez spécifier si vous avez informé votre supérieur immédiat.',
            'checkbox_sup.in' => 'La valeur pour informer votre supérieur immédiat doit être "Oui" ou "Non".',
        ];
    }
}
