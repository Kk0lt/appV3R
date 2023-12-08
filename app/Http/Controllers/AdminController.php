<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\Formulaire;
use App\Models\Notification;
use App\Models\FormAccidentTravail;
use App\Models\GrilleAuditSst;
use App\Models\RapportAccident;
use App\Models\FormSituationDangereuse;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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

    public function accueil(Request $request)
    {
        try {
            // ... autres logiques ...

            $notifications = Notification::all();
            $formulaireDetails = [];
            $allForms = [];
            $luParAdmin = [];
            $nonluParSuperieur = [];
            $luParSuperieur = [];
     
            
            foreach ($notifications as $notification) {
                $type = $this->getFormulaireType($notification->nom_Form);
                $statut_admin = $notification->statut_admin;
                $statut_superieur = $notification->statut_superieur;

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




            }
            return view('admins.admin', compact('allForms','formulaireDetails', 'luParAdmin', 'nonluParSuperieur', 'luParSuperieur'));

        } catch (\Throwable $th) {
            Log::debug($th);
            return redirect()->back()->withErrors(['Une erreur est survenue']);
        }
    }


    // Pour le formulaire de Situation Dangereuse
    public function showFormulaireSituationDangereuse($id)
    {
        try {
            // Trouver la notification par son ID
            $notification = Notification::findOrFail($id);

            // Accéder au formulaire associé à la notification
            $formulaire = $notification->formSituationDangereuse;

            return view('admins.formulaire-situation-dangereuse', compact('formulaire'));
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
            return view('admins.formulaire-accident-travail', compact('formulaire'));
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
            return view('admins.grille-audit-sst', compact('formulaire'));
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
            return view('admins.rapport-accident', compact('formulaire'));
        } catch (\Throwable $th) {
            Log::debug($th);
            return redirect()->back()->withErrors(['Une erreur est survenue']);
        }
    }

    private function getAllFormulaires(Request $request)
    {
    
        $formulaires = FormAccidentTravail::all();
        $formulaires = $formulaires->merge(FormSituationDangereuse::all());
        $formulaires = $formulaires->merge(GrilleAuditSST::all());
        $formulaires = $formulaires->merge(RapportAccident::all());

        // Filtrer par nom
        if ($request->has('nom')) {
            $formulaires = $formulaires->where('nom', $request->nom);
        }

        // Trier selon la valeur du select
        $currentSortMethod = $request->input('sort_by', 'date_asc');
        switch ($currentSortMethod) {
            case 'date_asc':
                $formulaires = $formulaires->sortBy('date');
                break;
            case 'date_desc':
                $formulaires = $formulaires->sortByDesc('date');
                break;
            case 'id_asc':
                $formulaires = $formulaires->sortBy('id');
                break;
            case 'id_desc':
                $formulaires = $formulaires->sortByDesc('id');
                break;
            // Ajoutez d'autres cas selon vos besoins
            default:
                $currentSortMethod = 'date_asc'; // Valeur par défaut
                $formulaires = $formulaires->sortBy('date');
        }

        return view('admins.admin', compact('formulaires', 'currentSortMethod'));
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

    //marquer la notification comme lu

    public function markAsReadByAdmin($formID)
    {
        try {
            // Trouver le formulaire par son ID
            $formulaire = FormSituationDangereuse::find($formID);
    
            if ($formulaire) {
                // Trouver la notification associée à ce formulaire
                $notification = Notification::where('form_id', $formID)->first();
    
                if ($notification) {
                    // Mettre à jour le champ statut_admin à "lu"
                    $notification->update(['statut_admin' => 'lu']);
                    Log::info('statut_admin = lu ');
                    return redirect()->route('admins.admin');
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
