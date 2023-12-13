<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrilleAuditSst;
use Illuminate\Support\Facades\Log;
use App\Models\Notification;
use App\Models\Employe;
use App\Http\Requests\GrilleAuditSstRequest;



class GrilleAuditSstController extends Controller
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
    public function store(GrilleAuditSstRequest $request)
    {
    
        try { 
            
            // Validation des données du formulaire
            $validatedData = $request->validate();
        
            // Créer une nouvelle instance du modèle GrilleAuditSST et attribuer les valeurs
            $grilleAuditSST = new GrilleAuditSST;

            $employe = Employe::where('id', auth()->user()->id)->first();

            // Utiliser la variable $employe pour obtenir le prénom et le nom
            $employeNom = $employe->prenom . ' ' . $employe->nom;

            $grilleAuditSST->employe_id = $employe->id;

            $grilleAuditSST->lieu = $request->lieu;

            $grilleAuditSST->date = $request->date;
            $grilleAuditSST->heure = $request->heure;

            // Enregistrer d'autres champs
            $grilleAuditSST->epi = $request->epi;
            $grilleAuditSST->tenue_des_lieux = $request->tenue_des_lieux;
            $grilleAuditSST->comportement_securitaire = $request->comportement_securitaire;
            $grilleAuditSST->signalisation = $request->signalisation;
            $grilleAuditSST->fiches_signalitique = $request->fiches_signalitique;
            $grilleAuditSST->travaux_excavation = $request->travaux_excavation;
            $grilleAuditSST->espace_clos = $request->espace_clos;
            $grilleAuditSST->methode_de_travail = $request->methode_de_travail;
            $grilleAuditSST->autres = $request->autres;
            $grilleAuditSST->distanciation = $request->distanciation;
            $grilleAuditSST->port_epi = $request->port_epi;
            $grilleAuditSST->procedures_covid = $request->procedures_covid;

            // Récupérer l'ID du superviseur de l'employé qui remplit le formulaire
            $superviseurId = $employe->superieur_id;

            // Notifier superviseur direct
            $notification = new Notification();
            $notification->superieur_id = $superviseurId;
            $notification->employe_id = $employe->id;
            $notification->nom_Form = "Grille Audit Sst";
            $notification->statut_superieur = "non lu";
            $notification->statut_admin = "non lu";
            $notification->nom_employe =  $employeNom ;
                    
            // Enregistrez l'instance dans la base de données
            $grilleAuditSST->save();
            $notification->form_id = $grilleAuditSST->id;
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
