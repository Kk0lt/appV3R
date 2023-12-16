@extends('layouts.app')
@section('title', 'accueil')
@section('contenuDuMilieu')

<body class="bg">
<div class="logo-container">
    <img src="/img/bouleOrange.png" alt="Logo Image" class="" id="Boucle"></a>
</div>

@if(!auth()->check() || (auth()->check() && auth()->user()->type == 'employe'))
    <h6 class="bonjour">Bonjour @auth {{ Auth::user()->prenom }} @endauth</h6>
@endif


@if(!auth()->check() || (auth()->check() && auth()->user()->type == 'superieur'))
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
                <a href="{{ route($detail['type'] . '.superieur.show', ['id' => $detail['id']]) }}">{{ $detail['nom_Form'] }} rempli par {{ $detail['nom_employe'] }}</a>
                </li>
                @endforeach
            @else
                <p>Aucune Notification.</p>
            @endif
        </ul>
    </div>
</div>
@endif
<div class="container">
    
    <!-- Début card mes formulaires -->
    <h5><a href="{{ route('formulaires.listesForm') }}" class="remplir-form"><i class="fa-sharp fa-solid fa-file-pen"></i>  Remplir un formulaire</a></h5>

    <h5 class="communications">Communiqués</h5>
    <div class="horizontal-scroll">
    @if (count($procedures) > 0)
    @foreach ($procedures as $procedure)
        <a href="{{ $procedure['lien'] }}" class="card-link">
            <div class="card">
                <i class="fa-solid fa-clipboard-list logo my-1"></i>
                <div class="card-body">
                    <h6 class="">{{ $procedure['titre'] }}</h6>
                </div>
            </div>
        </a>
    @endforeach
    @else
    <p class ="aucun-form">Aucune procedure </p>
    @endif
    </div>


        
        <!-- Fin card communiqué -->

        <!-- Début card mes formulaires -->        
    
        <h3 class="titreForm">Mes formulaires:</h3>
        <div class="mesForms">

            @if (count($empForms) > 0)
            @foreach ($empForms as $detail)
                <a href="" class="card-link monForm">
                    <div class="card">
                        <i class="fa-solid fa-list-check logo my-1"></i>
                        <div class="card-body">    
                                <a href="{{ route($detail['type'] . '.show', ['id' => $detail['id']]) }}">
                                    <p class="nom_f orm">{{ $detail['nom_Form'] }}</p>
                                    <p>rempli le</p>
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
        <!-- Fin card mes formulaires -->
        @if(!auth()->check() || (auth()->check() && auth()->user()->type == 'superieur'))

        <!-- Formulaires lus -->        
    
        <h3 class="titreForm">Formulaires lus:</h3>
        <div class="mesForms">

            @if (count($formsLu) > 0)
            @foreach ($formsLu as $detail)
                <a href="" class="card-link monForm">
                    <div class="card">
                        <i class="fa-solid fa-list-check logo my-1"></i>
                        <div class="card-body">    
                                <a href="{{ route($detail['type'] . '.show', ['id' => $detail['id']]) }}">
                                    <p class="nom_form">{{ $detail['nom_Form'] }}</p>
                                    <p>Employé: {{ $detail['nom_employe'] }}</p>
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
        @endif

    </div>

   
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