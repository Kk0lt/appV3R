<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\FormAccidentTravail;
use App\Models\Formulaire;
use App\Models\Notification;
use App\Models\Employe;
use App\Http\Requests\FormAccidentTravailRequest;


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
    public function store(FormAccidentTravailRequest $request)
    {
        try {
            
        // Validation des données du formulaire
        $validatedData = $request->validate();

        // Créer une nouvelle instance du modèle FormAccidentTravail
        $formAccidentTravail = new FormAccidentTravail;

        $employe = Employe::where('id', auth()->user()->id)->first();

        // Utiliser la variable $employe pour obtenir le prénom et le nom
        $employeNom = $employe->prenom . ' ' . $employe->nom;

        $formAccidentTravail->employe_id = $employe->id;

        // Remplir les propriétés de l'instance avec les données du formulaire
        $formAccidentTravail->date = $request->input('date');
        $formAccidentTravail->heure = $request->input('heure');
        
        // Vérifiez si la radio "temoin" est cochée à "Oui"
        if ($request->input('temoin') === 'Oui') {
            // Enregistrez ce qui est écrit dans "nom_temoin"
            $formAccidentTravail->nom_temoin = $request->input('nom_temoin');
        } else {
            // Sinon, enregistrez "Aucun temoin" dans "nom_temoin"
            $formAccidentTravail->nom_temoin = 'Aucun temoin';
        }
        $formAccidentTravail->endroit = $request->input('endroit');
        $formAccidentTravail->secteur = $request->input('secteur');

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

        $formAccidentTravail->absence = $request->input('absence');

        
        $formAccidentTravail->superieur = $request->input('checkbox_sup');

        // Récupérer l'ID du superviseur de l'employé qui remplit le formulaire
        $superviseurId = $employe->superieur_id;

        // Notifier superviseur direct
        $notification = new Notification();
        $notification->superieur_id = $superviseurId;
        $notification->employe_id = $employe->id;
        $notification->message = 'Nouveau formulaire rempli par l\'employé ' . $employeNom . '.';
        $notification->save();

        // Enregistrez l'instance dans la base de données
        $formAccidentTravail->save();

        // Redirigez l'utilisateur vers une page de confirmation ou de succès
        } catch(\Throwable $e) {
            Log::debug($e);
            return redirect()->back()->withErrors(["La création a échoué"]); ;

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
