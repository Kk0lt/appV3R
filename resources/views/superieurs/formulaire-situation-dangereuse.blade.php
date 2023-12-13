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
    <h1>Formulaire Situation Dangereuse</h1>
    <div class = "info-form ">
        <ul>
        <!-- Affichez les détails du formulaire situation dangereuse ici -->
        <li><p class="categorie">Nom de l'employé: </p><p class ="reponse">{{ $formulaire->employe->prenom }} {{ $formulaire->employe->nom }} </p></li>
        <li><p class="categorie">Date de l'accident: </p><p class ="reponse">{{ $formulaire->date }}</p></li>
        <li><p class="categorie">Heure: </p><p class ="reponse">{{ $formulaire->heure }}</p></li>
        <li><p class="categorie">Nom du témoin: </p><p class ="reponse">{{ $formulaire->nom_temoin }}</p></li>
        <li><p class="categorie">Description: </p><p class ="reponse">{{ $formulaire->description }}</p></li>
        <li><p class="categorie">Corrections proposées: </p><p class ="reponse">{{ $formulaire->corrections }}</p></li>
        <li><p class="categorie">Supérieur averti: </p><p class ="reponse">{{ $formulaire->superieur_averti }}</p></li>



        <!-- Ajoutez d'autres champs selon vos besoins -->
        </ul>
        @if(!auth()->check() || (auth()->check() && auth()->user()->type == 'superieur'))
        <div class ="SubmitBtn-Row">
            <div class="blocVide">
            </div>
            <div class="submitbtn-container">
                <input type="submit" value="Marqué comme lu">
            </div>
        </div>
        @endif
        </form>
    </div>
  





</body>

@endsection
