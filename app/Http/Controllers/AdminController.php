<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Formulaire;
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


    public function accueil(Request $request)
    {
        $formulaires = $this->getAllFormulaires($request);


        $currentSortMethod = $request->input('sort_by', 'date_asc'); // Défaut : tri par date ascendant

        return view('admins.admin', compact('formulaires', 'currentSortMethod'));
        }

 // Dans votre méthode du contrôleur (AdminController.php)

private function getAllFormulaires(Request $request)
{
    // Logique pour récupérer les données depuis les tables, les filtrer et les trier

    // Exemple :
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
