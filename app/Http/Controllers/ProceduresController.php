<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;
use Illuminate\Support\Facades\Log;

class ProceduresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $procedures = Procedure::all();
        return view('employes.documents', compact("procedures"));
        
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
            
            // Créer une nouvelle instance du modèle RapportAccident et attribuer les valeurs
            $procedure = new Procedure;

            // Enregistrer les autres champs du rapport d'accident
            $procedure->titre = $request->titre;
            $procedure->lien = $request->lien;
                    
            $procedure->save();
        
            // Redirigez l'utilisateur vers une page de confirmation ou de succès
            } catch (\Throwable $e) {
                Log::debug($e);
                return redirect()->back()->withErrors(["La création a échoué"]);
            }
        
        return redirect()->route('procedures.index');
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
        try {
            // Trouver la procédure par son identifiant
            $procedure = Procedure::findOrFail($id);

            // Supprimer la procédure
            $procedure->delete();

            // Rediriger l'utilisateur avec un message de succès
            return redirect()->route('procedures.index')->with('success', 'Procédure supprimée avec succès.');
        } catch (\Throwable $e) {
            // En cas d'erreur, enregistrez l'erreur dans les journaux et redirigez l'utilisateur avec un message d'erreur
            Log::debug($e);
            return redirect()->route('procedures.index')->with('error', 'La suppression a échoué.');
        }
    }

}
