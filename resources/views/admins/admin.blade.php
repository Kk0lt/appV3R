@extends('layouts.app')
@section('title', 'admin')
@section('contenuDuMilieu')

<head>
<link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="bg">
    <div>
        <img src="/img/bouleOrange.png" alt="Logo Image" class="" id="Boucle"></a>
    </div>

    <div class="liste-notifications">
        <div class="bjr_container">
            <h6 class="bonjour">Bonjour @auth {{ Auth::user()->prenom }} @endauth</h6>
        </div>
    <div class="navigationRapide">
        <h3 class ="titre-notif"><a href="{{ route('employes.notifications') }}">
            <i class="fa-solid fa-bell"></i>  Notifications</a></h3>
        <ul>
            @if (count($formulaireDetails) > 0)
                @foreach ($formulaireDetails as $detail)
                <li>
                <a href="{{ route($detail['type'] . '.show', ['id' => $detail['id']]) }}">{{ $detail['nom_Form'] }} rempli par {{ $detail['nom_employe'] }}</a>
                </li>
                @endforeach

                @if (count($notifAdminParSuperieurLu) > 0)
                @foreach ($notifAdminParSuperieurLu as $detail)
                <li>
                <a href="{{ route($detail['type'] . '.show', ['id' => $detail['id']]) }}">
                {{ $detail['nom_superieur'] }} a lu le formulaire de {{ $detail['nom_employe'] }}
                </a>
                </li>
                @endforeach
            @endif

            @else
                <li>Aucune Notification.</li>
            @endif
        </ul>
    </div>
</div>

<div class="container">


<!-- Button trigger modal -->
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


<h3 class="titreForm">Listes des formulaires:</h3>
<div class="mesForms">
    @if (count($allForms) > 0)
    @foreach ($allForms as $detail)
        <a href="" class="card-link monForm">
            <div class="card">
                <i class="fa-solid fa-list-check logo my-1"></i>
                <div class="card-body">    
                        <a href="{{ route($detail['type'] . '.show', ['id' => $detail['id']]) }}">
                            <p class="nom_form">{{ $detail['nom_Form'] }}</p>
                            @if ($detail['statut_admin'] == 'lu')
                            <p class="titre_card">Validation admin:</p><p class = "admin_lu">{{ $detail['statut_admin'] }}</p>
                            @endif
                            @if ($detail['statut_admin'] == 'non lu')
                            <p class="titre_card">Validation admin:</p><p class = "admin_non_lu">{{ $detail['statut_admin'] }}</p>
                            @endif

                            @if ($detail['statut_superieur'] == 'lu')
                            <p class="titre_card">Validation superieur:</p><p class = "superieur_lu">{{ $detail['statut_superieur'] }}</p>
                            @endif
                            @if ($detail['statut_superieur'] == 'non lu')
                            <p class="titre_card">Validation superieur:</p><p class = "superieur_non_lu">{{ $detail['statut_superieur'] }}</p>
                            @endif
                            <p class="date_form">{{ $detail['date'] }}</p>
                        </a>
                        
                    </div>
                </div>
            </a>
            
            @endforeach
        @else
        <p class ="aucun-form">Aucun formulaire remplis </p>
    @endif 
</div>

<h3 class="titreForm">Formulaires validé par les admins:</h3>
<div class="mesForms">
    @if (count($luParAdmin) > 0)
    @foreach ($luParAdmin as $detail)
        <a href="" class="card-link monForm">
            <div class="card">
                <i class="fa-solid fa-list-check logo my-1"></i>
                <div class="card-body">    
                        <a href="{{ route($detail['type'] . '.show', ['id' => $detail['id']]) }}">
                            <p class="nom_form">{{ $detail['nom_Form'] }}</p>
                            @if ($detail['statut_admin'] == 'lu')
                            <p class="titre_card">Validation admin:</p><p class = "admin_lu">{{ $detail['statut_admin'] }}</p>
                            @endif
                            @if ($detail['statut_admin'] == 'non lu')
                            <p class="titre_card">Validation admin:</p><p class = "admin_non_lu">{{ $detail['statut_admin'] }}</p>
                            @endif

                            @if ($detail['statut_superieur'] == 'lu')
                            <p class="titre_card">Validation superieur:</p><p class = "superieur_lu">{{ $detail['statut_superieur'] }}</p>
                            @endif
                            @if ($detail['statut_superieur'] == 'non lu')
                            <p class="titre_card">Validation superieur:</p><p class = "superieur_non_lu">{{ $detail['statut_superieur'] }}</p>
                            @endif
                            <p class="date_form">{{ $detail['date'] }}</p>
                        </a>
                        
                    </div>
                </div>
            </a>
            
            @endforeach
        @else
        <p class ="aucun-form">Aucun formulaire remplis </p>
    @endif 
</div>


</div>

    <!-- ESPACE FORMULAIRES -->
    
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

