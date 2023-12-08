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
    <h1>Formulaire d'accident de travail</h1>
    <div class = "info-form ">
        <ul>
        <!-- Affichez les détails du formulaire situation dangereuse ici -->
        <li><p class="categorie">Nom de l'employé: </p><p class ="reponse">{{ $formulaire->employe->prenom }} {{ $formulaire->employe->nom }} </p></li>
        <li><p class="categorie">Date de l'accident: </p><p class ="reponse">{{ $formulaire->date }}</p></li>
        <li><p class="categorie">Heure: </p><p class ="reponse">{{ $formulaire->heure }}</p></li>
        <li><p class="categorie">Nom du témoin: </p><p class ="reponse">{{ $formulaire->nom_temoin }}</p></li>
        <li><p class="categorie">Endroit: </p><p class ="reponse">{{ $formulaire->endroit }}</p></li>
        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->secteur }}</p></li>

        <!-- Blessures-->
        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->blessure_tete }}</p></li>
        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->blessure_torse }}</p></li>
        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->blessure_poumon }}</p></li>
        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->blessure_bras }}</p></li>
        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->blessure_poignets }}</p></li>
        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->blessure_dos }}</p></li>
        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->blessure_hanche }}</p></li>
        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->blessure_jambe }}</p></li>
        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->blessure_pied }}</p></li>
        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->blessure_autre }}</p></li>
        

        <li><p class="categorie">Secteur: </p><p class ="reponse">{{ $formulaire->description_blessure }}</p></li>

        <li><p class="categorie">Description de la blessure: </p><p class ="reponse">{{ $formulaire->description_blessure }}</p></li>
        <li><p class="categorie">Violence: </p><p class ="reponse">{{ $formulaire->violence }}</p></li>
        <li><p class="categorie">Description de la tâche effectuée: </p><p class ="reponse">{{ $formulaire->tache }}</p></li>
        <li><p class="categorie">Premiers soins: </p><p class ="reponse">{{ $formulaire->soin }}</p></li>
        <li><p class="categorie">Nom du secouriste: </p><p class ="reponse">{{ $formulaire->secouriste }}</p></li>
        <li><p class="categorie">Absence: </p><p class ="reponse">{{ $formulaire->absence }}</p></li>
        <li><p class="categorie">Superieur avisé: </p><p class ="reponse">{{ $formulaire->superieur }}</p></li>



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