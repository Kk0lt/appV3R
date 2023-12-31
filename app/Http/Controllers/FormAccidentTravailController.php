<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormAccidentTravailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\FormAccidentTravail;
use App\Models\Formulaire;
use App\Models\Notification;
use App\Models\Employe;

use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail; 
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
        // Concatenate the selected checkboxes into an array
        $selectedBlessures = (array) $request->input('description_blessure', []);
        $formAccidentTravail->description_blessure = implode(', ', $selectedBlessures);

        // Concatenate the selected checkboxes into an array
        $selectedViolence = (array) $request->input('violence', []);
        $formAccidentTravail->violence = implode(', ', $selectedViolence);
                    
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
        $notification->nom_Form = "Formulaire d'accident de travail";
        $notification->statut_superieur = "non lu";
        $notification->statut_admin = "non lu";
        $notification->nom_employe =  $employeNom ;
                 
        // Enregistrez l'instance dans la base de données
        $formAccidentTravail->save();
        $notification->form_id = $formAccidentTravail->id;
        $notification->save();

        // Envoie par email
        $supervisor = Employe::where('id', $superviseurId)->first();

        if ($supervisor) {
            $notificationData = [
                'formName' => "Formulaire d'accident de travail",
                'date' => now(), // or format your own date
                'employeNom' => $employeNom,
            ];

            Mail::to($supervisor->email)->send(new NotificationMail($notificationData));
        }

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
