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

            foreach ($notifications as $notification) {
                $type = $this->getFormulaireType($notification->nom_Form);

                if ($type) {
                    $formulaireDetails[] = [
                        'type' => $type,
                        'id' => $notification->id,
                        'nom_Form' => $notification->nom_Form,
                        'nom_employe' => $notification->nom_employe,
                    ];
                }
            }
            log::debug($formulaireDetails);
            return view('admins.admin', compact('formulaireDetails'));

        } catch (\Throwable $th) {
            Log::debug($th);
            return redirect()->back()->withErrors(['Une erreur est survenue']);
        }
    }


    // Pour le formulaire de Situation Dangereuse
    public function showFormulaireSituationDangereuse($id)
    {
        try {
            $formulaire = FormSituationDangereuse::findOrFail($id);
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
            $formulaire = FormAccidentTravail::findOrFail($id);
            return view('admins.formulaire-accident-travail', compact('formulaire'));
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
}
