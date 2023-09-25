@extends('layouts.app')
@section('contenuDuMilieu')
<!DOCTYPE html>
<html>
<head>
    <title>Déclaration d'accident de travail</title>
    <link rel="stylesheet" href="{{ asset('css/grilleAuditSST.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/formulaires.css') }} ">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">



</head>
<body>
    <h1>Déclaration d'accident de travail</h1>
    <form action="traitement.php" method="POST">

    <!--Description de l'évenement-->

    <h5>Description de l'évenement</h5>

        <label for="date">Lieu(x) des travaux: Aéroport </label>
        <input type="text" name="lieu" required>

        <label for="date">Date :</label>
        <input type="date" name="date" required>

        <label for="heure">Heure :</label>
        <input type="time" name="heure" required>

        <div class="checkbox-group">
        
        <div class="container_element">
        <label for="epi">EPI</label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>

        <div class="container_element">
        <label for="tenue_des_lieux">Tenue des lieux</label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>

        <div class="container_element">
        <label for="comportement_securitaire">Comportement sécuritaire</label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>

        <div class="container_element">
        <label for="signalisation">Signalisation</label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>

        <div class="container_element">
        <label for="fiches_signalitique">Fiches signalétiques</label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>

        <div class="container_element">
        <label for="travaux_excavation">Travaux - Excavation</label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>

        <div class="container_element">
        <label for="espace_clos">Espace clos</label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>

        <div class="container_element">
        <label for="methode_de_travail">Méthode de travail</label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>

        <div class="container_element">
        <label for="autres">Autre(s): <br>
        <input type="text" id="autresTravaux" name="autre"></label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>

    <h5>Covid-19</h5>

        <div class="container_element">
        <label for="distanciation">Respect de la distanciation</label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>
        <div class="container_element">
        <label for="port_epi">Port des EPI (masque/visière)</label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>
        <div class="container_element">
        <label for="procedures_covid">Respect des procédures établies:</label>
        <input type="checkbox" name="conforme" value="conforme">Conforme
        <input type="checkbox" name="non_conforme" value="non_conforme">Non conforme
        <input type="checkbox" name="na" value="na" id="na"> N/A<br>
        </div>
    </div>

        <br><input type="submit" value="Soumettre">
    </form>



    <script src="{{ asset('js/formulaire.js') }}"></script>

</body>
</html>


@endsection
