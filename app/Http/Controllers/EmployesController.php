<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Procedure;
use App\Models\Formulaire;
use App\Models\Notification;
use App\Models\Employe;
use App\Models\FormAccidentTravail;
use App\Models\GrilleAuditSst;
use App\Models\RapportAccident;
use App\Models\FormSituationDangereuse;


class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    public function accueil(Request $request)
    {
        try {
            $procedures = Procedure::all();

            $notifications = Notification::all();
            $formulaireDetails = [];
            $empForms = [];
            $formsLu = [];

            foreach ($notifications as $notification) {
                $type = $this->getFormulaireType($notification->nom_Form);
                $superieur_id = $notification->superieur_id;
                $employe_id = $notification->employe_id;
                $statut_superieur = $notification->statut_superieur;
               
                //Log::debug('Type: ' . $type . ', Superieur_id: ' . $superieur_id . ', User_id: ' . auth()->user()->id);

                // Vérifier que le superviseur_id de la notification est le même que celui de l'employé connecté
                if ($type && $superieur_id && $superieur_id == auth()->user()->id && $statut_superieur == "non lu"  ) {
                    $formulaireDetails[] = [
                        'type' => $type,
                        'id' => $notification->id,
                        'nom_Form' => $notification->nom_Form,
                        'nom_employe' => $notification->nom_employe,
                    ];
                   
                }
                if ($type && $employe_id == auth()->user()->id) {
                    $empForms[] = [
                        'type' => $type,
                        'id' => $notification->id,
                        'nom_Form' => $notification->nom_Form,
                        'nom_employe' => $notification->nom_employe,
                        'date' => $notification->created_at->format('d F Y'),

                    ];    
                }

                if ($type && $superieur_id && $superieur_id == auth()->user()->id && $statut_superieur == "lu"  ) {
                    $formsLu[] = [
                        'type' => $type,
                        'id' => $notification->id,
                        'nom_Form' => $notification->nom_Form,
                        'nom_employe' => $notification->nom_employe,
                        'date' => $notification->created_at->format('d F Y'),

                    ];    
                }
            }
            
            return view('employes.accueil', compact('formulaireDetails', 'empForms', 'formsLu','procedures'  ));

        } catch (\Throwable $th) {
            Log::debug($th);
            return redirect()->back()->withErrors(['Une erreur est survenue']);
        }
    }

    public function documents()
    {
        return view('employes.documents');
    }

    
    public function notifications()
    { try {

            $notifications = Notification::all();
             $formulaireDetails = [];
            $allForms = [];
            $luParAdmin = [];
            $nonluParSuperieur = [];
            $luParSuperieur = [];
            $notifAdminParSuperieurLu = [];
     
            
            foreach ($notifications as $notification) {
                $type = $this->getFormulaireType($notification->nom_Form);
                $statut_admin = $notification->statut_admin;
                $statut_superieur = $notification->statut_superieur;
                $superieur_id = $notification->superieur_id;
                
                $superieur = Employe::where('id', $superieur_id)->first();
                $nom_superieur = $notification->nom_employe;


                //Tous les forms
                if ($type ) {
                    $allForms[] = [
                        'type' => $type,
                        'id' => $notification->id,
                        'nom_Form' => $notification->nom_Form,
                        'nom_employe' => $notification->nom_employe,
                        'statut_superieur' => $notification->statut_superieur,
                        'statut_admin' => $notification->statut_admin,
                        'date' => $notification->created_at->format('d F Y'),

                    ];
                }

                //Forms non lu par admin
                if ($type &&  $statut_admin == "non lu"  ) {
                    $formulaireDetails[] = [
                        'type' => $type,
                        'id' => $notification->id,
                        'nom_Form' => $notification->nom_Form,
                        'nom_employe' => $notification->nom_employe,
                        'statut_superieur' => $notification->statut_superieur,
                        'statut_admin' => $notification->statut_admin,
                        'date' => $notification->created_at->format('d F Y'),

                    ];
                }

                //Forms lu par admin
                if ($type &&  $statut_admin == "lu"  ) {
                    $luParAdmin[] = [
                        'type' => $type,
                        'id' => $notification->id,
                        'nom_Form' => $notification->nom_Form,
                        'nom_employe' => $notification->nom_employe,
                        'statut_superieur' => $notification->statut_superieur,
                        'statut_admin' => $notification->statut_admin,
                        'date' => $notification->created_at->format('d F Y'),

                    ];
                }

                //Forms non lu par les superieurs
                if ($type &&  $statut_superieur == "non lu"  ) {
                    $nonluParSuperieur[] = [
                        'type' => $type,
                        'id' => $notification->id,
                        'nom_Form' => $notification->nom_Form,
                        'nom_employe' => $notification->nom_employe,
                        'statut_superieur' => $notification->statut_superieur,
                        'statut_admin' => $notification->statut_admin,
                        'date' => $notification->created_at->format('d F Y'),

                    ];
                }

                //Forms lu par les superieurs
                if ($type &&  $statut_superieur == "lu"  ) {
                    $luParSuperieur[] = [
                        'type' => $type,
                        'id' => $notification->id,
                        'nom_Form' => $notification->nom_Form,
                        'nom_employe' => $notification->nom_employe,
                        'statut_superieur' => $notification->statut_superieur,
                        'statut_admin' => $notification->statut_admin,
                        'date' => $notification->created_at->format('d F Y'),

                    ];
                }

                //Forms lu par les superieurs mais pas les admins
                if ($type &&  $statut_superieur == "lu" && $statut_admin == "non lu"  ) {
                    $notifAdminParSuperieurLu[] = [
                        'type' => $type,
                        'id' => $notification->id,
                        'nom_superieur' => $nom_superieur,
                        'nom_Form' => $notification->nom_Form,
                        'nom_employe' => $notification->nom_employe,
                        'statut_superieur' => $notification->statut_superieur,
                        'statut_admin' => $notification->statut_admin,
                        'date' => $notification->created_at->format('d F Y'),

                    ];
                }


            }
            
            return view('employes.notifications', compact('notification','allForms','formulaireDetails', 'luParAdmin', 'nonluParSuperieur', 'luParSuperieur', 'notifAdminParSuperieurLu'));

        } catch (\Throwable $th) {
            Log::debug($th);
            return redirect()->back()->withErrors(['Une erreur est survenue']);
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    // Pour le formulaire de Situation Dangereuse
    public function showFormulaireSituationDangereuse($id)
    {
        try {
            // Trouver la notification par son ID
            $notification = Notification::findOrFail($id);

            // Accéder au formulaire associé à la notification
            $formulaire = $notification->formSituationDangereuse;
            Log::debug("allo");

            return view('superieurs.formulaire-situation-dangereuse', compact('formulaire'));
        } catch (\Throwable $th) {
            Log::debug($th);
            return redirect()->back()->withErrors(['Une erreur est survenue']);
        }
    }

    // Pour le formulaire d'Accident de Travail
    public function showFormulaireAccidentTravail($id)
    {
        try {
            // Trouver la notification par son ID
            $notification = Notification::findOrFail($id);

            // Accéder au formulaire associé à la notification
            $formulaire = $notification->formulaireAccidentTravail;
            return view('superieurs.formulaire-accident-travail', compact('formulaire'));
        } catch (\Throwable $th) {
            Log::debug($th);
            return redirect()->back()->withErrors(['Une erreur est survenue']);
        }
    }

    // Pour la grille audit sst
    public function showGrilleAuditSst($id)
    {
        try {
            // Trouver la notification par son ID
            $notification = Notification::findOrFail($id);

            // Accéder au formulaire associé à la notification
            $formulaire = $notification->grilleAuditSst;
            return view('superieurs.grille-audit-sst', compact('formulaire'));
        } catch (\Throwable $th) {
            Log::debug($th);
            return redirect()->back()->withErrors(['Une erreur est survenue']);
        }
    }

    // Pour le Rapport d'accident
    public function showRapportAccident($id)
    {
        try {
            // Trouver la notification par son ID
            $notification = Notification::findOrFail($id);

            // Accéder au formulaire associé à la notification
            $formulaire = $notification->rapportAccident;
            return view('superieurs.rapport-accident', compact('formulaire'));
        } catch (\Throwable $th) {
            Log::debug($th);
            return redirect()->back()->withErrors(['Une erreur est survenue']);
        }
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

    private function getFormulaireType($nom_Form)
    {
        switch ($nom_Form) {
            case 'Formulaire de Situation Dangereuse':
                return 'situation-dangereuse';
            case 'Formulaire d\'accident de travail':
                return 'accident-travail';
            case 'Grille Audit Sst':
                return 'grille-audit-sst';
            case 'Rapport d\'accident':
                return 'rapport-accident';
            // Ajoutez d'autres cas au besoin
            default:
                return null;
        }
    }

    public function markNotificationAsRead($formID)
    {
        try {
            // Trouver le formulaire par son ID
            $formulaire = FormSituationDangereuse::find($formID);
    
            if ($formulaire) {
                // Trouver la notification associée à ce formulaire
                $notification = Notification::where('form_id', $formID)->first();
    
                if ($notification) {
                    // Mettre à jour le champ statut_superieur à "lu"
                    $notification->update(['statut_superieur' => 'lu']);
                    Log::info('Notification marquée comme "lu" avec succès');
                    return redirect()->route('employes.accueil');
                }
    
                Log::info("Notification non trouvée");
                return redirect()->back()->with('error', 'Notification non trouvée');
            }
    
            Log::info("Formulaire non trouvé");
            return redirect()->back()->with('error', 'Formulaire non trouvé');
        } catch (\Exception $e) {
            Log::error($e);
            return redirect()->back()->with('error', 'Une erreur est survenue lors du marquage de la notification comme "lu"');
        }
    }
    




     
}
