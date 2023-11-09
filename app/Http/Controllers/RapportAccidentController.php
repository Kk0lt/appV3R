<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RapportAccident;
use Illuminate\Support\Facades\Log;

class RapportAccidentController extends Controller
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
        try { 

    // Créer une nouvelle instance du modèle GrilleAuditSST et attribuer les valeurs
    $rapportAccident = new RapportAccident();
   
    //$rapportAccident->employe_id = '1';

    $rapportAccident->noUnite = $request->noUnite;

    $rapportAccident->departement = "departement";
    $rapportAccident->noPermis = $request->noPermis;
    $rapportAccident->autres_vehicule = $request->input('checkbox_autre_vehicule');

    // Enregistrer les données dans la base de données
    $rapportAccident->save();
            // Redirigez l'utilisateur vers une page de confirmation ou de succès
            return redirect()->route('employes.accueil');
        } catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->back()->withErrors(["La création a échoué"]);
        }
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
