@extends('layouts.app')
@section('title', 'admin')
@section('contenuDuMilieu')
<head>
    <link rel="stylesheet" href="{{ asset('css/formulaires.css') }} ">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">



</head>
<body>
    <div class = "bodycontainer ">
    <h1>Formulaire Situation Dangereuse</h1>
<div class = "info-form ">
    
    <!-- Affichez les détails du formulaire situation dangereuse ici -->
    <p>Nom de l'employé: {{ $formulaire->employe->prenom }} {{ $formulaire->employe->nom }} </p>
    <p>Date: {{ $formulaire->date }}</p>
    <p>Heure: {{ $formulaire->heure }}</p>
    <p>Nom du témoin: {{ $formulaire->nom_temoin }}</p>
    <p>Description: {{ $formulaire->description }}</p>
    <p>Corrections proposées: {{ $formulaire->corrections }}</p>
    <p>Supérieur averti: {{ $formulaire->superieur_averti }}</p>

    <!-- Ajoutez d'autres champs selon vos besoins -->

    </div>
    </div>



</body>
@endsection
