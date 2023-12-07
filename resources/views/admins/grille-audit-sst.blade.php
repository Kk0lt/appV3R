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
    <h1>Grille Audit SST</h1>
    <div class = "info-form ">
        <ul>
        <!-- Affichez les détails du formulaire situation dangereuse ici -->
        <li><p class="categorie">Nom de l'employé: </p><p class ="reponse">{{ $formulaire->employe->prenom }} {{ $formulaire->employe->nom }} </p></li>
        <li><p class="categorie">Date de l'accident: </p><p class ="reponse">{{ $formulaire->date }}</p></li>
        <li><p class="categorie">Heure: </p><p class ="reponse">{{ $formulaire->heure }}</p></li>
        <li><p class="categorie">Epi: </p><p class ="reponse">{{ $formulaire->epi }}</p></li>
        <li><p class="categorie">Signalisation: </p><p class ="reponse">{{ $formulaire->signalisation }}</p></li>
        <li><p class="categorie">Fiches signalitiques: </p><p class ="reponse">{{ $formulaire->fiches_signalitique }}</p></li>
        <li><p class="categorie">Travaux excavation: </p><p class ="reponse">{{ $formulaire->travaux_excavation }}</p></li>
        <li><p class="categorie">Espace clos: </p><p class ="reponse">{{ $formulaire->espace_clos }}</p></li>
        <li><p class="categorie">Methode de travail: </p><p class ="reponse">{{ $formulaire->methode_de_travail }}</p></li>
        <li><p class="categorie">Autres: </p><p class ="reponse">{{ $formulaire->autres }}</p></li>
        <li><p class="categorie">Distanciation: </p><p class ="reponse">{{ $formulaire->distanciation }}</p></li>
        <li><p class="categorie">Port epi: </p><p class ="reponse">{{ $formulaire->port_epi }}</p></li>
        <li><p class="categorie">Procedures COVID: </p><p class ="reponse">{{ $formulaire->procedures_covid }}</p></li>



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
