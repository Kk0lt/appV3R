<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Formulaire;
use App\Models\FormAccidentTravail;
use App\Models\GrilleAuditSst;
use App\Models\RapportAccident;
use App\Models\FormSituationDangereuse;

class FormulairesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function listeForms()
    {
        return view('formulaires.formulaires'); 
    }
    
    public function formAccidentTravail()
    {
        return view ('formulaires.formAccidentTravail' );
    }
    public function formSituationDangereuse()
    {
        return view ('formulaires.formSituationDangereuse' );
    }    
    public function grilleAuditSST()
    {
        return view ('formulaires.grilleAuditSST' );
    }
    public function rapportAccident()
    {
        return view ('formulaires.rapportAccident' );
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
  
    public function storeFormAccidentTravail(Request $request)
    {
        try
        {
            Log::debug('storeFormAccidentTravail');

            $FormAccidentTravail = new FormAccidentTravail;

            $FormAccidentTravail->date = $request->date;   
            $FormAccidentTravail->heure = $request->heure; 


            $FormAccidentTravail->save();

        }
        catch(\Throwable $e)
        {
            Log::debug($e);
        return redirect()->route('admins.index')->with('message', "Erreur lors de la création de la campagne.");
        }
        
        return redirect()->route('admins.index');
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
