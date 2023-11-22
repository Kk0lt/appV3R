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
                <h1 class="bonjour2">Bonjour @auth {{ Auth::user()->prenom }} @endauth</h1>
            </div>
        </div>

        <div class="row text-center">


        <!-- resources/views/admins/admin.blade.php -->
      
    

            
            <!------------------------------------------------------>

            <div class="col-6 ">
            <form class="menuForm" id="searchForm" action="{{ route('admins.admin') }}" method="GET">
            
            <select name="sort_by" onchange="submitForm()">
                <option value="date_asc" {{ $currentSortMethod === 'date_asc' ? 'selected' : '' }}>Trier par date (ascendant)</option>
                <option value="date_desc" {{ $currentSortMethod === 'date_desc' ? 'selected' : '' }}>Trier par date (descendant)</option>
                <option value="id_asc" {{ $currentSortMethod === 'id_asc' ? 'selected' : '' }}>Trier par ID (ascendant)</option>
                <option value="id_desc" {{ $currentSortMethod === 'id_desc' ? 'selected' : '' }}>Trier par ID (descendant)</option>
                <!-- Ajoutez d'autres options selon vos besoins -->
            </select>

        </form>

        <script>
            function submitForm() {
                document.getElementById('searchForm').submit();
            }
        </script>

            </div>

            <div class="col-6">
        <form action="{{ route('admins.admin') }}" method="GET">
            <input type="text" name="nom" placeholder="Rechercher par nom">
            <button type="submit"  class="btn btn-rechercher" >Rechercher</button>
        </form>
            
            </div>

        </div>

    </div>

    @if (isset($compagne))


    <div class="forms-container bgB">
        <div class="my-5 pt-1">
            <h2>Liste des formulaires remplis :</h2>
        </div>

        @foreach($formulaires as $formulaire)
        <div class="row pb-3 formulaire">

            <div class="col-2 ml-5">
                <i class="fa-solid fa-clipboard-list orangeLogo2"></i>
            </div>

            <div class="col-4 pt-2">
                <h3>{{ $formulaire->id }}</h3>
                <h3>{{ $formulaire->nom }} du {{ $formulaire->date }} </h3>
            </div>

            <div class="col-3 pt-3">
                <!-- statut -->
                <h3>En attente</h3>
            </div>

            <div class="col-2 pt-2">
                <!-- consulter et confirmer -->
                <button class="btn btn-consulter"><i></i>Consulter</button>
            </div>
            
        </div>
        @endforeach

    </div>



<!-- resources/views/admins/admin.blade.php -->
@else
<div class="forms-container bgB ">
<h1 class="aucun-form">Aucun formulaire à afficher<h1>
 </div>
@endif


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
