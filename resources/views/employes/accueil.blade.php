@extends('layouts.app')
@section('title', 'accueil')
@section('contenuDuMilieu')

<body class="bg">
<div>
    <img src="/img/bouleOrange.png" alt="Logo Image" class="" id="Boucle"></a>
</div>

@if(!auth()->check() || (auth()->check() && auth()->user()->type == 'superieur'))
<div class="liste-notifications">
    <div>
    <h6 class="bonjour">Bonjour @auth {{ Auth::user()->prenom }} @endauth</h6>
    </div>
    <div class="navigationRapide">
        <h3>Notifications :</h3>
        <ul>
            @if (count($formulaireDetails) > 0)
                @foreach ($formulaireDetails as $detail)
                <li>
                <a href="{{ route($detail['type'] . '.show', ['id' => $detail['id']]) }}">{{ $detail['nom_Form'] }} rempli par {{ $detail['nom_employe'] }}</a>
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

    <h5 class="com mt-5">Communiqués</h5>
    <div class="horizontal-scroll">
        <a href="#" class="card-link">
            <div class="card">
                <i class="fa-solid fa-clipboard-list logo my-1"></i>
                <div class="card-body">
                    <h6 class="card-title">Nouveau formulaire disponible</h6>
                </div>
            </div>
        </a>
        

        <a href="#" class="card-link">
            <div class="card">
                <i class="fa-solid fa-clipboard-list logo my-1"></i>
                <div class="card-body">
                    <h6 class="card-title">Nouveau formulaire disponible</h6>
                </div>
            </div>
        </a>

        <a href="#" class="card-link">
            <div class="card">
                <i class="fa-solid fa-clipboard-list logo my-1"></i>
                <div class="card-body">
                    <h6 class="card-title">Nouveau formulaire disponible</h6>
                </div>
            </div>
        </a>

        <a href="#" class="card-link">
            <div class="card">
                <i class="fa-solid fa-clipboard-list logo my-1"></i>
                <div class="card-body">
                    <h6 class="card-title">Nouveau formulaire disponible</h6>
                </div>
            </div>
        </a>

        <a href="#" class="card-link">
            <div class="card">
                <i class="fa-solid fa-clipboard-list logo my-1"></i>
                <div class="card-body">
                    <h6 class="card-title">Nouveau formulaire disponible</h6>
                </div>
            </div>
        </a>

        <a href="#" class="card-link">
            <div class="card">
                <i class="fa-solid fa-clipboard-list logo my-1"></i>
                <div class="card-body">
                    <h6 class="card-title">Nouveau formulaire disponible</h6>
                </div>
            </div>
        </a>

        <a href="#" class="card-link">
            <div class="card">
                <i class="fa-solid fa-clipboard-list logo my-1"></i>
                <div class="card-body">
                    <h6 class="card-title">Nouveau formulaire disponible</h6>
                </div>
            </div>
        </a>

        <a href="#" class="card-link">
            <div class="card">
                <i class="fa-solid fa-clipboard-list logo my-1"></i>
                <div class="card-body">
                    <h6 class="card-title">Nouveau formulaire disponible</h6>
                </div>
            </div>
        </a>
    </div>
    
        <!-- Fin card communiqué -->

        <!-- Début card mes formulaires -->        
    
    <h3 class="titreForm mt-5">Mes formulaires:</h3>
    <div class="mesForms">

            <a href="" class="card-link">
                <div class="card">
                    <i class="fa-solid fa-list-check logo my-1"></i>
                    <div class="card-body">    
                        <h6 class="card-title">Déclaration d'accident: Reçus</h6>
                        <h6 class="card-title">YYYY-MM-JJ</h6>
                    </div>
                </div>
            </a>

    </div>
    </div>

        <!-- Fin card mes formulaires -->


   
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