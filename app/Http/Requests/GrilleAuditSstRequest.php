<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrilleAuditSSTRequest extends FormRequest
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
            'lieu' => 'required|string',
            'date' => 'required|date',
            'heure' => 'required',
            'epi' => 'required|in:conforme,non_conforme,na',
            'tenue_des_lieux' => 'required|in:conforme,non_conforme,na',
            'comportement_securitaire' => 'required|in:conforme,non_conforme,na',
            'signalisation' => 'required|in:conforme,non_conforme,na',
            'fiches_signalitique' => 'required|in:conforme,non_conforme,na',
            'travaux_excavation' => 'required|in:conforme,non_conforme,na',
            'espace_clos' => 'required|in:conforme,non_conforme,na',
            'methode_de_travail' => 'required|in:conforme,non_conforme,na',
            'autres' => 'nullable|string',
            'distanciation' => 'required|in:conforme,non_conforme,na',
            'port_epi' => 'required|in:conforme,non_conforme,na',
            'procedures_covid' => 'required|in:conforme,non_conforme,na',
        ];
    }
}
