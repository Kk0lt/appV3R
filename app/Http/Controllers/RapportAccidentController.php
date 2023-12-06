<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RapportAccident;
use Illuminate\Support\Facades\Log;
use App\Models\Notification;
use App\Models\Employe;
use App\Http\Requests\RapportAccidentRequest;



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
    public function store(RapportAccidentRequest $request)
    {
        try {
            // Créer une nouvelle instance du modèle RapportAccident et attribuer les valeurs
            $rapportAccident = new RapportAccident;
            
            $employe = Employe::where('id', auth()->user()->id)->first();

            // Utiliser la variable $employe pour obtenir le prénom et le nom
            $employeNom = $employe->prenom . ' ' . $employe->nom;

            $rapportAccident->employe_id = $employe->id;

            // Enregistrer les autres champs du rapport d'accident
            $rapportAccident->noUnite = $request->noUnite;
            $rapportAccident->departement = "departement";
            $rapportAccident->noPermis = $request->noPermis;
            $rapportAccident->autres_vehicule = $request->input('checkbox_autre_vehicule');

            // Notifier superviseur direct
            $notification = new Notification();
            $notification->superieur_id = $superviseurId;
            $notification->employe_id = $employe->id;
            $notification->nom_Form = "Rapport d'accident";
            $notification->statut_superieur = "non lu";
            $notification->statut_admin = "non lu";
            $notification->nom_employe =  $employeNom ;
                    
            // Enregistrez l'instance dans la base de données
            $rapportAccident->save();
            $notification->form_id = $rapportAccident->id;
            $notification->save();

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
