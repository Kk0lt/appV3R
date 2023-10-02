@extends('layouts.app')
@section('contenuDuMilieu')
<!DOCTYPE html>
<html>
<head>
    <title>Déclaration d'accident de travail</title>
    <link rel="stylesheet" href="{{ asset('css/formulaires.css') }} ">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">



</head>
<body>
    <h1>Signalement d'une situation dangereuse, d'un acte de violence ou d'un "passé proche"</h1>
    <form action="traitement.php" method="POST">
    <!--Description de l'évenement-->
        <h5>Description de l'évenement</h5>

        <label for="date">Date de l'observation :</label>
        <input type="date" name="date" required><br><br>

        <label for="heure">Heure :</label>
        <input type="time" name="heure" required><br><br>
     
        <div class="temoin-group">
                <label>Témoin :</label>
                <div class="temoin_checkbox">
                    <input type="radio" name="temoin" value="Oui" id="temoin_oui">
                    <label for="temoin_oui" id="label_temoin_oui">Oui</label>
                    <input type="radio" name="temoin" value="Non" id="temoin_non">
                    <label for="temoin_non">Non</label>
                </div>
            </div>
    <!-- Champ de saisie du nom du témoin -->
    <div id="temoin_nom" style="display: none;">
        <label for="nom_temoin">Nom du témoin/des témoins :</label>
        <input type="text" id="nom_temoin" name="nom_temoin">
    </div>

    <h5>Description de la situation dangereuse ou du passée proche</h5>

    <label for="soin"> Description:</label>
    <textarea name="soin" rows="4" cols="50"></textarea><br><br>
    
    <label>Correction(s) ou amélioration(s) proposée(s):</label>
    <textarea name="soin" rows="4" cols="50"></textarea><br><br>

    <div class="superieur-group">
            <label for="superieur">J'ai avisé mon supérieur immédiat :</label>
            <div class="checkbox_sup">
                <input type="radio" name="checkbox_sup" value="Oui" id="sup_oui">
                <label for="sup_oui" id="label_sup_oui">Oui</label>
                <input type="radio" name="checkbox_sup" value="Non" id="sup_non">
                <label for="sup_non" id="label_sup_non">Non</label>   
            </div>
        </div>
        <input type="submit" value="Soumettre">

    </form>



    <script src="{{ asset('js/formulaire.js') }}"></script>

</body>
</html>


@endsection
