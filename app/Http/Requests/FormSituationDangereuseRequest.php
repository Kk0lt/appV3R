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
}
