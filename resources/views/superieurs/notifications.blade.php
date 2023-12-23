@extends('layouts.app')
@section('title', 'documents')
@section('contenuDuMilieu')
<head>
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('css/notifs.css') }}">
</head>

<body class="bg">
<div>
    <img src="/img/bouleOrange.png" alt="Logo Image" class="" id="Boucle"></a>
    
</div>


  <!-- Début card les formulaires -->        
<div class="container">
<div class="enTete">
    <div>
        <h3 id=""><a id="retour" href="{{ url()->previous() }}">Retour</a></h3><br>
    </div>
    <div class="">
        <h3 class="titreNotif ">Historique des notifications:</h3>
    </div>
</div>

<div class="mesNotifs">
    
    <ul>
        @if (count($allForms) > 0)
            @foreach ($allForms as $detail)
            <li>
            <a href="{{ route($detail['type'] . '.show', ['id' => $detail['id']]) }}">{{ $detail['nom_Form'] }} rempli par {{ $detail['nom_employe'] }}</a>
            </li>
            @endforeach
        @else
            <li>Aucune Notification.</li>

        @endif
    </ul>
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