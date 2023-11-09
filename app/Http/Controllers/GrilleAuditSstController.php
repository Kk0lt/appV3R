<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrilleAuditSst;
use Illuminate\Support\Facades\Log;


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
    public function store(Request $request)
    {
        try { 

    // Créer une nouvelle instance du modèle GrilleAuditSST et attribuer les valeurs
    $grilleAuditSST = new GrilleAuditSST();
   
    //$grilleAuditSST->employe_id = '1';

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

    // Enregistrer les données dans la base de données
    $grilleAuditSST->save();
            // Redirigez l'utilisateur vers une page de confirmation ou de succès
            return redirect()->route('employes.accueil');
        } catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->back()->withErrors(["La création a échoué"]);
        }
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