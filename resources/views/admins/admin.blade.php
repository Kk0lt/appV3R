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

    <div class="">

        <div class="row text-center">
            <div class="col-12 mt-5">
                <h1 class="bonjour2">Bonjour X</h1>
            </div>
        </div>

        <div class="row text-center">

            <div class="col-6 ">
                <form class="menu-form">
                    <label for="choix">Trier par:</label>
                        <select id="choix" name="choix" class="smaller-select">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                            <!-- Ajoutez d'autres options au besoin -->
                        </select>
                    <input class="btn btn-valider" type="submit" value="Valider">
                </form>
            </div>

            <div class="col-6">
                <form action="" method="GET">
                    <label for="recherche">Rechercher:</label>
                    <input type="text" id="recherche" class="search-bar" name="q" placeholder="# de formulaire" />
                    <button type="submit" class="btn btn-rechercher">Rechercher</button>
                    <!-- request pour limiter seulement au # de formulaire remplis -->
                </form>
            </div>

        </div>

    </div>



    <div class="container bgB">
        <div class="my-5 pt-1">
            <h2>Liste des formulaires remplis :</h2>
        </div>

        <div class="row pb-3">

            <div class="col-2 ml-5">
                <i class="fa-solid fa-clipboard-list orangeLogo2"></i>
            </div>

            <div class="col-4 pt-2">
                <h3>Declaration d'accident : </h3>
            </div>

            <div class="col-3 pt-3">
                <!-- statut -->
                <h3>En attente</h3>
            </div>

            <div class="col-2 pt-2">
                <!-- consulter et confirmer -->
                <button><i></i>Consulter</button>
            </div>

        </div>

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