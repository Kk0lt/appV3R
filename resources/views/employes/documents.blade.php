@extends('layouts.app')
@section('title', 'documents')
@section('contenuDuMilieu')
<head>
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
<i class="fa-sharp fa-solid fa-file-pen"></i>  Créer une procédure
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Créer une procédure</h5>
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
            <label for="lien">Liens: </label><br>
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

<h3 class="titreForm ">Liste des documents:</h3>

  <div class="mesForms">
    @if (count($procedures) > 0)
    @foreach ($procedures as $procedure)
      <a href="{{ $procedure['lien'] }}" class="card-link monForm">
        <div class="card">
            <i class="fa-solid fa-clipboard-list logo my-1"></i>
            <div class="card-body">    
              <p class="nom_form">{{ $procedure['titre'] }}</p>                                
            </div>
        </div>
      </a>
    @endforeach
    @else
    <p class ="aucun-form">Aucune procedure </p>
    @endif
  </div>


</div>
<!-- Fin card les formulaires -->
  

   
<!-- FOOTER -->
<footer class="custom-footer text-center ">
<div class="row">
      <div class="col-xl-3 offset-xl-2 ">
        <h3>Liens:</h3>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="https://www.v3r.net/" class="nav-link p-0 v3rLink">v3r.net</a></li>
        </ul>
      </div>

      <div class="col-xl-3 offset-xl-1">
          <h3>Besoin d'aide ? </h3>
          <h6>Contactez-nous : 311 <i class="fa-solid fa-phone"></i></h6>
      </div>
    </div>
      <p class="padFoot">© Ville de Trois-Rivières. Tous droits réservés.</p>
</footer>

@endsection





</body>