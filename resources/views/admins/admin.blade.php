@extends('layouts.app')
@section('title', 'admin')
@section('contenuDuMilieu')

<head>
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="bg1">
    <div>
        <img src="/img/bouleOrange.png" alt="Logo Image" class="" id="Boucle"></a>
    </div>
    <div class="row text-center">
        <div class="col-12 mt-5">
            <h1 class="bonjour2">Bonjour @auth {{ Auth::user()->prenom }} @endauth</h1>
        </div>
    </div>

      <div class="listCommandesHaut">
        <div>
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
