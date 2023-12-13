@extends('layouts.app')
@section('contenuDuMilieu')
<!DOCTYPE html>
<html>
<head>
    <title>Grille Audit SST</title>
    <link rel="stylesheet" href="{{ asset('css/grilleAuditSST.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/formulaires.css') }} ">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">



</head>
<body>
<div class = "bodycontainer ">
    <h1>Grille Audit SST</h1>
    <form action="{{ route('GrilleAuditSST.store') }}" method="POST">
    @csrf
    <!--Description de l'évenement-->

    <h5>Description de l'évenement</h5>

        <label for="lieu">Lieu(x) des travaux: Aéroport </label>
        <input type="text" name="lieu" required>
        @error('lieu')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="date">Date :</label>
        <input type="date" name="date" required>
        @error('date')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="heure">Heure :</label>
        <input type="time" name="heure" required>
        @error('heure')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="checkbox-group">
        
        <div class="container_element">
            <label for="epi">EPI</label>
            <ul>
            <li><input type="checkbox" name="epi" value="conforme">Conforme</li>
            <li><input type="checkbox" name="epi" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="epi" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('epi')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="container_element">
            <label for="tenue_des_lieux">Tenue des lieux</label>
            <ul>
            <li><input type="checkbox" name="tenue_des_lieux" value="conforme">Conforme</li>
            <li><input type="checkbox" name="tenue_des_lieux" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="tenue_des_lieux" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('tenue_des_lieux')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="container_element">
            <label for="comportement_securitaire">Comportement sécuritaire</label>
            <ul>
            <li><input type="checkbox" name="comportement_securitaire" value="conforme">Conforme</li>
            <li><input type="checkbox" name="comportement_securitaire" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="comportement_securitaire" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('comportement_securitaire')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="container_element">
            <label for="signalisation">Signalisation</label>
            <ul>
            <li><input type="checkbox" name="signalisation" value="conforme">Conforme</li>
            <li><input type="checkbox" name="signalisation" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="signalisation" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('signalisation')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="container_element">
            <label for="fiches_signalitique">Fiches signalétiques</label>
            <ul>
            <li><input type="checkbox" name="fiches_signalitique" value="conforme">Conforme</li>
            <li><input type="checkbox" name="fiches_signalitique" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="fiches_signalitique" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('fiches_signalitique')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="container_element">
            <label for="travaux_excavation">Travaux - Excavation</label>
            <ul>
            <li><input type="checkbox" name="travaux_excavation" value="conforme">Conforme</li>
            <li><input type="checkbox" name="travaux_excavation" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="travaux_excavation" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('travaux_excavation')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="container_element">
            <label for="espace_clos">Espace clos</label>
            <ul>
            <li><input type="checkbox" name="espace_clos" value="conforme">Conforme</li>
            <li><input type="checkbox" name="espace_clos" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="espace_clos" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('espace_clos')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="container_element">
            <label for="methode_de_travail">Méthode de travail</label>
            <ul>
            <li><input type="checkbox" name="methode_de_travail" value="conforme">Conforme</li>
            <li><input type="checkbox" name="methode_de_travail" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="methode_de_travail" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('methode_de_travail')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="container_element">
            <label for="autres">Autre(s): <br>
            <input type="text" id="autresTravaux" name="autres"></label>
            <ul>
            <li><input type="checkbox" name="autre" value="conforme">Conforme</li>
            <li><input type="checkbox" name="autre" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="autre" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('autres')
            <div class="error">{{ $message }}</div>
        @enderror

    <h5>Covid-19</h5>

        <div class="container_element">
            <label for="distanciation">Respect de la distanciation</label>
            <ul>
            <li><input type="checkbox" name="distanciation" value="conforme">Conforme</li>
            <li><input type="checkbox" name="distanciation" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="distanciation" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('distanciation')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="container_element">
            <label for="port_epi">Port des EPI (masque/visière)</label>
            <ul>
            <li><input type="checkbox" name="port_epi" value="conforme">Conforme</li>
            <li><input type="checkbox" name="port_epi" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="port_epi" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('port_epi')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="container_element">
            <label for="procedures_covid">Respect des procédures établies:</label>
            <ul>
            <li><input type="checkbox" name="procedures_covid" value="conforme">Conforme</li>
            <li><input type="checkbox" name="procedures_covid" value="non_conforme">Non conforme</li>
            <li><input type="checkbox" name="procedures_covid" value="na" id="na"> N/A<br></li>
            </ul>
        </div>
        @error('procedures_covid')
            <div class="error">{{ $message }}</div>
        @enderror

    </div>

        <br><input type="submit" value="Soumettre">
    </form>



    </div>
    <script src="{{ asset('js/grilleAuditSST.js') }}"></script>
    <script src="{{ asset('js/formulaire.js') }}"></script>

</body>
</html>


@endsection
