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

    public function messages()
    {
        return [
            'lieu.required' => 'Le lieu est obligatoire.',
            'lieu.string' => 'Le lieu doit être une chaîne de caractères.',
            'date.required' => 'La date est obligatoire.',
            'date.date' => 'La date doit être une date valide.',
            'heure.required' => 'L\'heure est obligatoire.',
            'epi.required' => 'Le champ EPI est obligatoire.',
            'epi.in' => 'La valeur pour EPI doit être "conforme", "non conforme" ou "n/a".',
            'tenue_des_lieux.required' => 'Le champ Tenue des lieux est obligatoire.',
            'tenue_des_lieux.in' => 'La valeur pour Tenue des lieux doit être "conforme", "non conforme" ou "n/a".',
            'comportement_securitaire.required' => 'Le comportement sécuritaire est obligatoire.',
            'comportement_securitaire.in' => 'La valeur pour le comportement sécuritaire doit être "conforme", "non conforme" ou "n/a".',
            'signalisation.required' => 'La signalisation est obligatoire.',
            'signalisation.in' => 'La valeur pour la signalisation doit être "conforme", "non conforme" ou "n/a".',
            'fiches_signalitique.required' => 'Les fiches signalétiques sont obligatoires.',
            'fiches_signalitique.in' => 'La valeur pour les fiches signalétiques doit être "conforme", "non conforme" ou "n/a".',
            'travaux_excavation.required' => 'Les travaux d\'excavation sont obligatoires.',
            'travaux_excavation.in' => 'La valeur pour les travaux d\'excavation doit être "conforme", "non conforme" ou "n/a".',
            'espace_clos.required' => 'L\'espace clos est obligatoire.',
            'espace_clos.in' => 'La valeur pour l\'espace clos doit être "conforme", "non conforme" ou "n/a".',
            'methode_de_travail.required' => 'La méthode de travail est obligatoire.',
            'methode_de_travail.in' => 'La valeur pour la méthode de travail doit être "conforme", "non conforme" ou "n/a".',
            'autres.string' => 'Autres doivent être une chaîne de caractères.',
            'distanciation.required' => 'La distanciation est obligatoire.',
            'distanciation.in' => 'La valeur pour la distanciation doit être "conforme", "non conforme" ou "n/a".',
            'port_epi.required' => 'Le port d\'EPI est obligatoire.',
            'port_epi.in' => 'La valeur pour le port d\'EPI doit être "conforme", "non conforme" ou "n/a".',
            'procedures_covid.required' => 'Les procédures COVID sont obligatoires.',
            'procedures_covid.in' => 'La valeur pour les procédures COVID doit être "conforme", "non conforme" ou "n/a".',
        ];
    }
}
