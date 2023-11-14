<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usager;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function formConnexion()
    {
       $usagers = Usager::all();

        return view ('usagers.formConnexion' );
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
    public function update(Request $request)
    {
        try {
            $usager = Usager::findOrFail(auth()->user()->id);
            Log::debug($usager);
            // vérifier l'ancien mot de passe
            if (!Hash::check($request->input('old_password'), $usager->password)) {
                return redirect()->back()->withErrors(['old_password' => 'Le mot de passe actuel ne correspond pas.']);
            }

            // mettre à jour le mot de passe
            $usager->password = Hash::make($request->input('password'));
            $usager->save();

            return redirect()->back()->withErrors('Le mot de passe a été modifié avec succès !');
        } catch (\Throwable $e) {
            Log::error($e);
            return redirect()->back()->withErrors(['error' => 'La modification du mot de passe a échoué.']);
        }
    
    }


    public function connexion(UsagerRequest $request)
    {
        $reussi = Auth::attempt(['username'=> $request->username, 'password' => $request->password]);

        Log::debug(Auth::attempt(['username'=> $request->username, 'password' => $request->password]));

        if ($reussi) {
            $user = Auth::user();
            if ($user->type === 'Admin') {
                return redirect()->route('admins.index');
            } elseif ($user->type === 'Client') {
                return redirect()->route('produits.index');
            } elseif ($user->type === 'SuperAdmin') {
                return redirect()->route('superadmins.index');
            }
        } else {
            Log::debug(Auth::attempt(['username'=> $request->username, 'password' => $request->password]));
            Log::debug($request->all());
            return redirect()->route('usagers.formConnexion')->withErrors(['username' => 'Les informations d\'identification sont incorrectes. Veuillez réessayer.']);

        }
    }
    
    // Déconnexion
    public function logout()
    {
        Auth::logout();
        return redirect()->route('employes.accueil');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
