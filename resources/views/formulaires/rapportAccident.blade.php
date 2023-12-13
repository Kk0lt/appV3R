@extends('layouts.app')
@section('contenuDuMilieu')
<!DOCTYPE html>
<html>
<head>
    <title>Déclaration d'accident de travail</title>
    <link rel="stylesheet" href="{{ asset('css/formulaires.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/rapportAccident.css') }} ">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">



</head>
<body>
<div class="bodycontainer">

    <h1>Atelier mécanique - RAPPORT D'ACCIDENT</h1>
    <form action="{{ route('RapportAccident.store') }}" method="POST">
    @csrf
    <!--Description de l'évenement-->
    <h5>Description de l'évenement</h5>

    <div class="champ">
        <label for="noUnite">Numéro(s) d'unité:</label>
        <input type="text" name="noUnite" id="noUnite">
        @error('noUnite')
                <div class="error">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="champ">    
        <label for="departement">Departement:</label>
        <select name="departement" id="departement" class="">
        <option value="">Departement</option>
        </select>
        @error('departement')
                <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="champ">
        <label for="noPermis">Numero de permis de conduire:</label>
        <input type="text" name="noPermis" id="noPermis">
        @error('noPermis')
                <div class="error">{{ $message }}</div>
        @enderror
    </div>

        <div class="autre-vehicule-group champ">
                <label for="autre_vehicule">Autre véhicules impliqués (citoyen):</label>
                <div class="checkbox_autre_vehicule">
                    <input type="radio" name="checkbox_autre_vehicule" value="Oui" id="label_oui">
                    <label for="label_oui" id="label_oui">Oui</label>
                    <input type="radio" name="checkbox_autre_vehicule" value="Non" id="label_non">
                    <label for="label_non" id="label_non">Non</label>   
                </div>
                @error('checkbox_autre_vehicule')
                <div class="error">{{ $message }}</div>
                @enderror
        </div>
        <input type="submit" value="Soumettre">

    </form>


    </div>

    <script src="{{ asset('js/formulaire.js') }}"></script>

</body>
</html>


@endsection
