<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

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

            $notifications = Notification::all();
            $formulaireDetails = [];

            foreach ($notifications as $notification) {
                $type = $this->getFormulaireType($notification->nom_Form);
                $superieur_id = $notification->superieur_id;
               
                //Log::debug('Type: ' . $type . ', Superieur_id: ' . $superieur_id . ', User_id: ' . auth()->user()->id);

                // Vérifier que le superviseur_id de la notification est le même que celui de l'employé connecté
                if ($type && $superieur_id && $superieur_id == auth()->user()->id) {
                    $formulaireDetails[] = [
                        'type' => $type,
                        'id' => $notification->id,
                        'nom_Form' => $notification->nom_Form,
                        'nom_employe' => $notification->nom_employe,
                    ];
                }
            }
            
            return view('employes.accueil', compact('formulaireDetails'));

        } catch (\Throwable $th) {
            Log::debug($th);
            return redirect()->back()->withErrors(['Une erreur est survenue']);
        }
    }

    public function documents()
    {
        return view('employes.documents');
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

    private function getFormulaireType($nom_Form)
    {
        switch ($nom_Form) {
            case 'Formulaire de Situation Dangereuse':
                return 'situation-dangereuse';
            case 'Formulaire d\'accident de travail':
                return 'accident-travail';
            // Ajoutez d'autres cas au besoin
            default:
                return null;
        }
    }

    //marquer la notification comme lu
    public function markAsRead($notificationId)
    {
        try {
            // Trouver la notification par son ID
            $notification = Notification::find($notificationId);
    
            if ($notification) {
                // Mettre à jour le champ statut_superieur à "lu"
                $notification->update(['statut_superieur' => 'lu']);
                return redirect()->back()->with('success', 'Notification marquée comme "lu" avec succès');
                Log::error('Notification marquée comme "lu" avec succès');
                
            }
    
            return redirect()->back()->with('error', 'Notification non trouvée');
            Log::error("Notification non trouvée'");

        } catch (\Exception $e) {
            Log::error($e);
            return redirect()->back()->with('error', 'Une erreur est survenue lors du marquage de la notification comme "lu"');
        }
    }
     
}
