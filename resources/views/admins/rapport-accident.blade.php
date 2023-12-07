@extends('layouts.app')
@section('title', 'admin')
@section('contenuDuMilieu')
<head>
    <link rel="stylesheet" href="{{ asset('css/formulaires.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/formulaires_soumis.css') }} ">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">



</head>
<body class = "bodycontainer">
<form id="markAsReadForm" action="{{ route('mark-notification-as-read', $formulaire->id) }}" method="POST">
    @csrf
    <h1>Rapport d'accident</h1>
    <div class = "info-form ">
        <ul>
        <!-- Affichez les détails du formulaire situation dangereuse ici -->
        <li><p class="categorie">Nom de l'employé: </p><p class ="reponse">{{ $formulaire->employe->prenom }} {{ $formulaire->employe->nom }} </p></li>
        <li><p class="categorie">Numéro d'unité: </p><p class ="reponse">{{ $formulaire->noUnite }}</p></li>
        <li><p class="categorie">Département: </p><p class ="reponse">{{ $formulaire->departement }}</p></li>
        <li><p class="categorie">Numéro de permis: </p><p class ="reponse">{{ $formulaire->noPermis }}</p></li>
        <li><p class="categorie">Autres vehicule: </p><p class ="reponse">{{ $formulaire->autres_vehicule }}</p></li>




        <!-- Ajoutez d'autres champs selon vos besoins -->
        </ul>
        <div class ="SubmitBtn-Row">
            <div class="blocVide">
            </div>
            <div class="submitbtn-container">
                <input type="submit" value="Marqué comme lu">
            </div>
        </div>
        </form>
    </div>
  





</body>

@endsection
