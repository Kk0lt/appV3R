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
    public function store(Request $request, $employe_id)
    {
        try {
            // Créer une nouvelle instance du modèle RapportAccident et attribuer les valeurs
            $rapportAccident = new RapportAccident();
            $employe = Employe::find($employe_id);

            // Utiliser la variable $employe pour obtenir le prénom et le nom
            $employePrenom = $employe->prenom;
            $employeNom = $employe->nom;

            $employeNomC = $employePrenom . " " . $employeNom;

            // Enregistrer les autres champs du rapport d'accident
            $rapportAccident->noUnite = $request->noUnite;
            $rapportAccident->departement = "departement";
            $rapportAccident->noPermis = $request->noPermis;
            $rapportAccident->autres_vehicule = $request->input('checkbox_autre_vehicule');

            // Notifier le superviseur direct
            $supervisorId = '1'; // L'ID du supérieur direct à notifier 

            $notification = new Notification();
            $notification->user_id = $supervisorId;
            $notification->message = 'Nouveau formulaire rempli par l\'employé ' . $employeNomC . '.';
            $notification->save();

            // Enregistrer les données dans la base de données
            $rapportAccident->save();

            // Redirigez l'utilisateur vers une page de confirmation ou de succès
            } catch (\Throwable $e) {
                Log::debug($e);
                return redirect()->back()->withErrors(["La création a échoué"]);
            }
        
        return redirect()->route('employes.accueil');
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
