<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\FormAccidentTravail;
use App\Models\Formulaire;

class FormAccidentTravailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Créer une nouvelle instance du modèle FormAccidentTravail
        $formAccidentTravail = new FormAccidentTravail;

        // Remplir les propriétés de l'instance avec les données du formulaire
        $formAccidentTravail->employe_id = $request->employe_id;
        $formAccidentTravail->date = $request->date;
        $formAccidentTravail->heure = $request->heure;
        // $formAccidentTravail->temoin = $request->temoin;
        // $formAccidentTravail->nom_temoin = $request->nom_temoin;
        $formAccidentTravail->endroit = $request->endroit;
        $formAccidentTravail->secteur = $request->secteur;

        //blessure
        $formAccidentTravail->blessure_tete = $request->blessure_tete;
        $formAccidentTravail->blessure_torse = $request->blessure_torse;
        $formAccidentTravail->blessure_poumon = $request->blessure_poumon;
        $formAccidentTravail->blessure_bras = $request->blessure_bras;
        $formAccidentTravail->blessure_poignets = $request->blessure_poignets;
        $formAccidentTravail->blessure_dos = $request->blessure_dos;
        $formAccidentTravail->blessure_hanche = $request->blessure_hanche;
        $formAccidentTravail->blessure_jambe = $request->blessure_jambe;
        $formAccidentTravail->blessure_pied = $request->blessure_pied;
        $formAccidentTravail->blessure_autre = $request->blessure_autre;
        $formAccidentTravail->description_blessure = $request->description_blessure;
        
        $formAccidentTravail->violence = $request->violence;
        $formAccidentTravail->tache = $request->tache;
        $formAccidentTravail->soin = $request->soin;
        $formAccidentTravail->secouriste = $request->secouriste;

        $formAccidentTravail->absence = $request->absence;
        $formAccidentTravail->absence_consultation = $request->absence_consultation;
        
        $formAccidentTravail->superieur = $request->superieur;

        // Enregistrez l'instance dans la base de données
        $formAccidentTravail->save();

        // Redirigez l'utilisateur vers une page de confirmation ou de succès
        return redirect()->route('nom_de_la_route_de_confirmation');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
