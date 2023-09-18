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
                <div class="temoin_checkbox">
                    <input type="radio" name="temoin" value="Oui" id="temoin_oui">
                    <label for="temoin_oui" id="label_temoin_oui">Oui</label>
                    <input type="radio" name="temoin" value="Non" id="temoin_non">
                    <label for="temoin_non">Non</label>
                </div>
            </div>
        <label for="temoins">Nom du/des témoins :</label>
        <input type="text" name="temoins"><br><br>

        <label for="endroit">Endroit de l'accident :</label>
        <input type="text" name="endroit" required><br><br>

        <label for="secteur">Secteur d'activité :</label>
        <input type="text" name="secteur" required><br><br>

        <div class="checkbox-group">
        <label>Nature et site de la blessure (cochez s'il y a lieu, côté droit ou côté gauche) :</label>
        
        <div class="container_blessure">
        <label for="blessure_tete">Tête, visage, nez, yeux, oreille :</label>
        <input type="checkbox" name="blessure_tete" value="gauche"> Gauche
        <input type="checkbox" name="blessure_tete" value="droit"> Droit
        <input type="checkbox" name="blessure_tete" value="les_deux"> Les deux<br>
        <input type="checkbox" name="blessure_tete" value="les_deux"> Aucun<br>
        </div>

        <div class="container_blessure">
        <label for="blessure_epaule">Torse :</label>
        <input type="checkbox" name="blessure_torse" value="gauche"> Gauche
        <input type="checkbox" name="blessure_torse" value="droit"> Droit
        <input type="checkbox" name="blessure_torse" value="les_deux"> Les deux<br>
        <input type="checkbox" name="blessure_torse" value="les_deux"> Aucun<br>
        </div>

        <div class="container_blessure">
        <label for="blessure_bras">Poumon :</label>
        <input type="checkbox" name="blessure_poumon" value="gauche"> Gauche
        <input type="checkbox" name="blessure_poumon" value="droit"> Droit
        <input type="checkbox" name="blessure_poumon" value="les_deux"> Les deux<br>
        <input type="checkbox" name="blessure_poumon" value="les_deux"> Aucun<br>
        </div>
  
        <div class="container_blessure">
        <label for="blessure_bras">Bras, épaule, coude :</label>
        <input type="checkbox" name="blessure_bras" value="gauche"> Gauche
        <input type="checkbox" name="blessure_bras" value="droit"> Droit
        <input type="checkbox" name="blessure_bras" value="les_deux"> Les deux<br>
        <input type="checkbox" name="blessure_bras" value="les_deux"> Aucun<br>
        </div>
  
        <div class="container_blessure">
        <label for="blessure_bras">Poignets, main, doigt :</label>
        <input type="checkbox" name="blessure_poignets" value="gauche"> Gauche
        <input type="checkbox" name="blessure_poignets" value="droit"> Droit
        <input type="checkbox" name="blessure_poignets" value="les_deux"> Les deux<br>
        <input type="checkbox" name="blessure_poignets" value="les_deux"> Aucun<br>
        </div>
  
        <div class="container_blessure">
        <label for="blessure_bras">Dos :</label>
        <input type="checkbox" name="blessure_dos" value="gauche"> Haut
        <input type="checkbox" name="blessure_dos" value="droit"> Bas
        <input type="checkbox" name="blessure_dos" value="les_deux"> Les deux<br>
        <input type="checkbox" name="blessure_dos" value="les_deux"> Aucun<br>
        </div>

        <div class="container_blessure">
        <label for="blessure_bras">Hanche :</label>
        <input type="checkbox" name="blessure_hanche" value="gauche"> Gauche
        <input type="checkbox" name="blessure_hanche" value="droit"> Droit
        <input type="checkbox" name="blessure_hanche" value="les_deux"> Les deux<br>
        <input type="checkbox" name="blessure_hanche" value="les_deux"> Aucun<br>
        </div>
  
        <div class="container_blessure">
        <label for="blessure_bras">Jambe, genou :</label>
        <input type="checkbox" name="blessure_jambe" value="gauche"> Gauche
        <input type="checkbox" name="blessure_jambe" value="droit"> Droit
        <input type="checkbox" name="blessure_jambe" value="les_deux"> Les deux<br>
        <input type="checkbox" name="blessure_jambe" value="les_deux"> Aucun<br>
        </div>
  
        <div class="container_blessure">
        <label for="blessure_bras">Pied, orteil, cheville :</label>
        <input type="checkbox" name="blessure_pied" value="gauche"> Gauche
        <input type="checkbox" name="blessure_pied" value="droit"> Droit
        <input type="checkbox" name="blessure_pied" value="les_deux"> Les deux<br>
        <input type="checkbox" name="blessure_pied" value="les_deux"> Aucun<br>
        </div>

        <div class="container_blessure">
        <label for="blessure_autre">Autres :</label>
        <input type="text" name="blessure_autre" value=""> 
        </div>

  

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

        <div class="absence_container">
        <input type="radio" name="absence" value="aucune_absence" id="absence_aucune">
        <label for="absence_aucune">Accident nécessitant aucune absence</label><br>
        </div>

        <div class="absence_container">
        <input type="radio" name="absence" value="absence" id="absence">
        <label for="absence_consultation">Accident nécessitant une consultation</label><br><br>
        </div>

        <input type="text" name="superieur" ><br><br>
        <div class="superieur-group">
            <label for="superieur">J'ai avisé mon supérieur immédiat :</label>
            <div class="checkbox_sup">
                        <input type="radio" name="checkbox_sup" value="Oui" id="sup_oui">
                        <label for="sup_oui" id="label_sup_oui">Oui</label>
                        <input type="radio" name="checkbox_sup" value="Non" id="sup_non">
routes                        <label for="sup_non" id="label_sup_non">Non</label>   
            </div>
        </div>

        <input type="submit" value="Soumettre">
    </form>
</body>
</html>


@endsection
