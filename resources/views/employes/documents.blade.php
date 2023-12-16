@extends('layouts.app')
@section('title', 'documents')
@section('contenuDuMilieu')
<head>
<link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
<link rel="stylesheet" href="{{ asset('css/documents.css') }}">
</head>

<body class="bg">
<div>
    <img src="/img/bouleOrange.png" alt="Logo Image" class="" id="Boucle"></a>
</div>


  <!-- Début card les formulaires -->        
<div class="container">

<!-- Button trigger modal -->
@if(!auth()->check() || (auth()->check() && auth()->user()->type == 'admin'))
<a class="remplir-form" data-toggle="modal" data-target="#exampleModal">
<i class="fa-sharp fa-solid fa-file-pen"></i>  Ajouter une nouvelle.
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Créer une nouvelle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
         <form method="POST" action="{{ route('procedures.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="titre">Titre: </label><br>
            <input type="text" id="titre" name="titre" required>
        </div>
        <div class="form-group mt-2">
            <label for="lien">Lien: </label><br>
            <input type="text" id="lien" name="lien" required>
        </div>
      </div>

    <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Retour</button>
          <button type="submit" class="btn btn-primary create-procedure ">Créer</button>
    </div>

    </form>
    </div>
  </div>
</div>

<!-- Fin du modal -->
@endif


<div class="procedures">
    <ul>
        @if (count($procedures) > 0)
<h3 class="titreForm titreProcedure ">Liste des liens:</h3>

            @foreach ($procedures as $procedure)
            <li>
            <a id="titre-procedure" href="{{ $procedure['lien'] }}">{{ $procedure['titre'] }}</a><br>
            <a id="lien" href="{{ $procedure['lien'] }}">{{ $procedure['lien'] }}</a>
            </li>
            @endforeach
        @else
            <h5 class="aucun-procedure">Aucune procedure.</h5>

        @endif
    </ul>
</div>
</div>
<!-- Fin card les formulaires -->
  



@endsection





</body>