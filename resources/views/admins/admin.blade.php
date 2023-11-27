@extends('layouts.app')
@section('title', 'admin')
@section('contenuDuMilieu')

<head>
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <!-- Stylesheet Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
                <li>
                <a href="#exampleModal" data-toggle="modal" >Nouveau formulaire rempli par blabla </a>                
                </li>
            </ul>
        </div>
    </div> 

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nouvel Notification</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
            <button type="button" class="btn btn-primary">Confirmer</button>
        </div>
        </div>
    </div>
    </div>
    <!---FIN DU MODAL -->

    <div class="row text-center">
        <!-- Select de trie -->
        <div class="col-6 ">
            <form class="menu-form" id="searchForm" action="{{ route('admins.admin') }}" method="GET"> 
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
        <!-- Barre de recherche -->
        <div class=" search-bar">
            <form action="{{ route('admins.admin') }}" method="GET">
                <input type="text" name="nom" placeholder="Rechercher par nom" >
                <button type="submit"  class="btn btn-rechercher" >Rechercher</button>
            </form> 
        </div>
    </div>


    @if (isset($compagne))
    <!--S'il y a un formulaire dans la bd on affiche cette section -->
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
    <!-- Si aucun formulaire on affiche cette section -->
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
