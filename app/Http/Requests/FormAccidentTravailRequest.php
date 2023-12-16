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
            'endroit' => 'required|min:3|regex:/^[A-Za-z0-9\s\-]+$/',
            'secteur' => 'required|min:3|regex:/^[A-Za-z0-9\s\-]+$/',
            'blessure_tete' => 'required',
            'blessure_torse' => 'required',
            'blessure_poumon' => 'required',
            'blessure_bras' => 'required',
            'blessure_poignets' => 'required',
            'blessure_dos' => 'required',
            'blessure_hanche' => 'required',
            'blessure_jambe' => 'required',
            'blessure_pied' => 'required',
            'blessure_autre' => 'required_if:description_blessure,Autres|min:3|regex:/^[A-Za-z0-9\s\-]+$/',
            'description_blessure' => 'required|max:500',
            'violence' => 'required',
            'tache' => 'required|min:3|regex:/^[A-Za-z0-9\s\-]+$/',
            'soin' => 'required|min:3|regex:/^[A-Za-z0-9\s\-]+$/',
            'secouriste' => 'required|min:3|regex:/^[A-Za-z0-9\s\-]+$/',
            'absence' => 'required',
            'checkbox_sup' => 'required',
        ];
        
    }

    public function messages()
    {
        return [
            'date.required' => 'La date de l\'accident est obligatoire.',
            'date.date' => 'La date de l\'accident doit être une date valide.',
            'heure.required' => 'L\'heure de l\'accident est obligatoire.',
            'temoin.required' => 'Veuillez spécifier si un témoin était présent.',
            'nom_temoin.required_if' => 'Le nom du témoin est obligatoire si un témoin était présent.',
            'num_temoin.required_if' => 'Le numéro de téléphone du témoin est obligatoire si un témoin était présent.',
            'endroit.min' => 'Le champ endroit doit contenir au moins 3 caractères.',
            'endroit.regex' => 'Le champ endroit ne doit contenir que des lettres, des chiffres, des espaces et des tirets.',
            'endroit.required' => 'L\'endroit de l\'accident est obligatoire.',
            'secteur.required' => 'Le secteur d\'activité est obligatoire.',
            'blessure_tete.required' => 'Veuillez spécifier les blessures à la tête.',
            'blessure_torse.required' => 'Veuillez spécifier les blessures au torse.',
            'blessure_poumon.required' => 'Veuillez spécifier les blessures aux poumons.',
            'blessure_bras.required' => 'Veuillez spécifier les blessures aux bras.',
            'blessure_poignets.required' => 'Veuillez spécifier les blessures aux poignets.',
            'blessure_dos.required' => 'Veuillez spécifier les blessures au dos.',
            'blessure_hanche.required' => 'Veuillez spécifier les blessures à la hanche.',
            'blessure_jambe.required' => 'Veuillez spécifier les blessures aux jambes.',
            'blessure_pied.required' => 'Veuillez spécifier les blessures aux pieds.',
            'blessure_autre.required_if' => 'Veuillez spécifier d\'autres blessures si sélectionné.',
            'description_blessure.required' => 'La description des blessures est obligatoire.',
            'description_blessure.max' => 'La description des blessures ne peut pas dépasser :max caractères.',
            'violence.required' => 'Veuillez spécifier s\'il y a eu de la violence.',
            'tache.required' => 'La description de la tâche est obligatoire.',
            'soin.required' => 'La description des premiers soins est obligatoire.',
            'secouriste.required' => 'Le nom du secouriste est obligatoire.',
            'absence.required' => 'Veuillez spécifier l\'absence nécessaire suite à l\'accident.',
            'checkbox_sup.required' => 'Veuillez spécifier si vous avez informé votre supérieur immédiat.',
            'secteur.regex' => 'Le champ secteur ne doit contenir que des lettres, des chiffres, des espaces et des tirets.',
            'autre.regex' => 'Le champ autre ne doit contenir que des lettres, des chiffres, des espaces et des tirets.',
            'tache.regex' => 'Le champ tache ne doit contenir que des lettres, des chiffres, des espaces et des tirets.',
            'soin.regex' => 'Le champ soin ne doit contenir que des lettres, des chiffres, des espaces et des tirets.',
            'secouriste.regex' => 'Le champ secouriste ne doit contenir que des lettres, des chiffres, des espaces et des tirets.',
            'secteur.min' => 'Le champ secteur doit contenir au moins :min caractères.',
            'autre.min' => 'Le champ autre doit contenir au moins 3 caractères.',
            'tache.min' => 'Le champ tache doit contenir au moins 3 caractères.',
            'soin.min' => 'Le champ soin doit contenir au moins 3 caractères.',
            'secouriste.min' => 'Le champ secouriste doit contenir au moins 3 caractères.',
        ];
    }
}
