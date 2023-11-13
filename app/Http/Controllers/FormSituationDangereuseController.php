<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\FormSituationDangereuse;


class FormSituationDangereuseController extends Controller
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
            // Créer une nouvelle instance du modèle FormSituationDangereuse
            $formSituationDangereuse = new FormSituationDangereuse;
            $employe = Employe::find($employe_id);

            // Utiliser la variable $employe pour obtenir le prénom et le nom
            $employePrenom = $employe->prenom;
            $employeNom = $employe->nom;

            $employeNomC = $employePrenom . " " . $employeNom;


            // Remplir les propriétés de l'instance avec les données du formulaire
            $formSituationDangereuse->date = $request->input('date');
            $formSituationDangereuse->heure = $request->input('heure');
         
            // Vérifiez si la radio "temoin" est cochée à "Oui"
            if ($request->input('temoin') === 'Oui') {
                // Enregistrez ce qui est écrit dans "nom_temoin"
                $formSituationDangereuse->nom_temoin = $request->input('nom_temoin');
            } else {
                // Sinon, enregistrez "Aucun temoin" dans "nom_temoin"
                $formSituationDangereuse->nom_temoin = 'Aucun temoin';
            }
         
            $formSituationDangereuse->description = $request->input('description');
            $formSituationDangereuse->corrections = $request->input('corrections');
            $formSituationDangereuse->superieur_averti = $request->input('checkbox_sup');
        
            // Enregistrez l'instance dans la base de données
            $formSituationDangereuse->save();
        
            // Notifier superviseur direct
            $supervisorId = '1'; // L'ID du supérieur direct à notifier 

            $notification = new Notification();
            $notification->user_id = $supervisorId;
            $notification->message = 'Nouveau formulaire rempli par l\'employé ' . $employeNomC . '.';
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
