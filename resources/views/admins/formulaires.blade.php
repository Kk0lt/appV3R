

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


    @if (isset($formulaires))
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
