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
    $grilleAuditSst = new GrilleAuditSst;
    $grilleAuditSst->employe_id = '1';

    $grilleAuditSst->lieu = $request->input('lieu');
    $grilleAuditSst->date = $request->input('date');
    $grilleAuditSst->heure = $request->input('heure');

    // Boucle à travers les éléments de formulaire
    $elements = ['epi', 'tenue_des_lieux', 'comportement_securitaire', 'signalisation', 'fiches_signalitique', 'travaux_excavation', 'espace_clos', 'methode_de_travail', 'autres', 'distanciation', 'port_epi', 'procedures_covid'];

    foreach ($elements as $element) {
        $elementValue = $request->input($element);
        $conforme = in_array('conforme', $elementValue) ? 1 : 0;
        $nonConforme = in_array('non_conforme', $elementValue) ? 1 : 0;
        $na = in_array('na', $elementValue) ? 1 : 0;

        $grilleAuditSst->{$element . '_conforme'} = $conforme;
        $grilleAuditSst->{$element . '_non_conforme'} = $nonConforme;
        $grilleAuditSst->{$element . '_na'} = $na;
    }

    // Enregistrez l'instance dans la base de données
    $grilleAuditSst->save();

    // Redirigez l'utilisateur vers une page de confirmation ou de succès
    }catch (\Throwable $e) {
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
