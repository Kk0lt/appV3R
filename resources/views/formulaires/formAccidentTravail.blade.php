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
    <h1>Déclaration d'accident de travail</h1>
    <form action="traitement.php" method="POST">
        <label for="date">Date de l'accident :</label>
        <input type="date" name="date" required><br><br>

        <label for="heure">Heure :</label>
        <input type="time" name="heure" required><br><br>
        <div class="temoin-group">
                <label>Témoin :</label>
                <input type="radio" name="temoin" value="Oui" id="temoin_oui">
                <label for="temoin_oui">Oui</label>
                <input type="radio" name="temoin" value="Non" id="temoin_non">
                <label for="temoin_non">Non</label>
            </div>
        <label for="temoins">Nom du/des témoins :</label>
        <input type="text" name="temoins"><br><br>

        <label for="endroit">Endroit de l'accident :</label>
        <input type="text" name="endroit" required><br><br>

        <label for="secteur">Secteur d'activité :</label>
        <input type="text" name="secteur" required><br><br>

        <div class="checkbox-group">
                <label>Nature de la blessure (cochez s'il y a lieu coté droit et/ou coté gauche) :</label>
                <input type="checkbox" name="blessure[]" value="Côté droit">Côté droit
                <input type="checkbox" name="blessure[]" value="Côté gauche">Côté gauche
        </div>

            
    <div class="checkbox-group">
        <label>Description de la blessure (cochez toutes les blessures pertinentes) :</label>
        <ul>
        <li><input type="checkbox" name="description[]" value="Brûlure">Brûlure</li>
        <li><input type="checkbox" name="description[]" value="Écrasement">Écrasement</li>
        <li><input type="checkbox" name="description[]" value="Commotion cérébrale">Commotion cérébrale</li>
        <li><input type="checkbox" name="description[]" value="Corps étranger">Corps étranger</li>
        <li><input type="checkbox" name="description[]" value="Coupure/lacération/déchirure">Coupure/lacération/déchirure</li>
        <li><input type="checkbox" name="description[]" value="Douleur au dos">Douleur au dos</li>
        <li><input type="checkbox" name="description[]" value="Égratignures/éraflure/piqûre/écharde">Égratignures/éraflure/piqûre/écharde</li>
        <li><input type="checkbox" name="description[]" value="Entorse/élongation/contusion/foulure/luxation">Entorse/élongation/contusion/foulure/luxation</li>
        <li><input type="checkbox" name="description[]" value="Fracture">Fracture</li>
        <li><input type="checkbox" name="description[]" value="Amputation">Amputation</li>
        <li><input type="checkbox" name="description[]" value="Irritation/infection">Irritation/infection</li>
        <li><input type="checkbox" name="description[]" value="Inhalation">Inhalation</li>
        <li><input type="checkbox" name="description[]" value="Autres">Autres</li>
        </ul>    
    </div>

        <div class="checkbox-group">
        <label>Violence (cochez s'il y a lieu) :</label>
        <input type="checkbox" name="violence[]" value="Physique">Physique
        <input type="checkbox" name="violence[]" value="Verbal">Verbal
        </div>

        <label for="tache">Description de la tâche effectuée :</label>
        <textarea name="tache" rows="4" cols="50"></textarea><br><br>

        <label for="soin">Premiers soins :</label>
        <textarea name="soin" rows="4" cols="50"></textarea><br><br>

        <label for="secouriste">Nom du secouriste :</label>
        <input type="text" name="secouriste"><br><br>

        <label>Absence (cochez l'une des options) :</label><br>
        <input type="radio" name="absence" value="Accident nécessitant aucune absence" id="absence_aucune">
        <label for="absence_aucune">Accident nécessitant aucune absence</label><br>
        <input type="radio" name="absence" value="Accident nécessitant une consultation" id="absence_consultation">
        <label for="absence_consultation">Accident nécessitant une consultation</label><br><br>

        <label for="superieur">J'ai avisé mon supérieur immédiat :</label>
        <input type="text" name="superieur" required><br><br>

        <label for="date_superieur">Date :</label>
        <input type="date" name="date_superieur" required><br><br>

        <input type="submit" value="Soumettre">
    </form>
</body>
</html>


@endsection
