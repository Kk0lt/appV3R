@extends('layouts.app')
@section('contenuDuMilieu')
<!DOCTYPE html>
<html>
<head>
    <title>Déclaration d'accident de travail</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/formulaires.css') }} ">


</head>
<body>
    <div class="bodycontainer">
    <h1>Déclaration d'accident de travail</h1>
    <form method="POST" action="{{ route('FormAccidentTravail.store') }}">
    @csrf
    <!-- Description de l'événement -->

    <h5>Description de l'événement</h5>

    <div class="champ">

        <label for="date">Date de l'accident :</label>
        <input type="date" name="date"  >  
        @error('date')
        <div class="error">{{ $message }}</div>
        @enderror

    </div>

    <div class="champ">

        <label for="heure">Heure :</label>
        <input type="time" name="heure"  >  
        @error('heure')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div class="champ">

        <div class="temoin-group">
            <label>Témoin :</label>
            <div class="temoin_checkbox">
                <input type="radio" name="temoin" value="Oui" id="temoin_oui">
                <label for="temoin_oui" id="label_temoin_oui">Oui</label>
                <input type="radio" name="temoin" value="Non" id="temoin_non">
                <label for="temoin_non">Non</label>
            </div>
        </div>
        @error('temoin')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <!-- Champ de saisie du nom du témoin -->
    <div class="champ">

        <div id="temoin_nom" style="display: none;">
            <label for="nom_temoin">Nom du témoin/des témoins :</label>
            <input type="text" id="nom_temoin" name="nom_temoin">
            @error('nom_temoin')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="num_temoin">Numero de téléphone du témoin/des témoins :</label>
            <input type="text" id="num_temoin" name="num_temoin">
            @error('num_temoin')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

    </div>

    <div class="champ">

        <label for="endroit">Endroit de l'accident :</label>
        <input type="text" name="endroit" value="{{ old('endroit') }}"  >  
        @error('endroit')
            <div class="error">{{ $message }}</div>
        @enderror

    </div>

    <div class="champ">

        <label for="secteur">Secteur d'activité :</label>
        <input type="text" name="secteur" value="{{ old('secteur') }}"  >  
        @error('secteur')
            <div class="error">{{ $message }}</div>
        @enderror

    </div>

    <!-- Nature et site de la blessure -->
    <div class="checkbox-group">

        <label>Nature et site de la blessure (cochez s'il y a lieu, côté droit ou côté gauche) :</label>

        <div class="champ">

            <div class="container_blessure">
            <label for="blessure_tete">Tête, visage, nez, yeux, oreille :</label>
            <ul>
                <li><input type="checkbox" name="blessure_tete" value="gauche"> Gauche</li>
                <li><input type="checkbox" name="blessure_tete" value="droit"> Droit</li>
                <li><input type="checkbox" name="blessure_tete" value="aucun" id="blessure_tete_aucun"> Aucun</li>
            </ul>
            </div>
            @error('blessure_tete')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="champ">

            <div class="container_blessure">
            <label for="blessure_torse">Torse :</label>
            <ul>
                <li><input type="checkbox" name="blessure_torse" value="gauche"> Gauche</li>
                <li><input type="checkbox" name="blessure_torse" value="droit"> Droit</li>
                <li><input type="checkbox" name="blessure_torse" value="aucun" id="blessure_torse_aucun"> Aucun</li>
            </ul>
            </div>
            @error('blessure_torse')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="champ">

            <div class="container_blessure">
            <label for="blessure_poumon">Poumon :</label>
            <ul>
                <li><input type="checkbox" name="blessure_poumon" value="gauche"> Gauche</li>
                <li><input type="checkbox" name="blessure_poumon" value="droit"> Droit</li>
                <li><input type="checkbox" name="blessure_poumon" value="aucun" id="blessure_poumon_aucun"> Aucun</li>
            </ul>
            </div>
            @error('blessure_poumon')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>
  
        <div class="champ">

            <div class="container_blessure">
            <label for="blessure_bras">Bras, épaule, coude :</label>
            <ul>
                <li><input type="checkbox" name="blessure_bras" value="gauche"> Gauche</li>
                <li><input type="checkbox" name="blessure_bras" value="droit"> Droit</li>
                <li><input type="checkbox" name="blessure_bras" value="aucun" id="blessure_bras_aucun"> Aucun</li>
            </ul>
            </div>
            @error('blessure_bras')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>
  
        <div class="champ">

            <div class="container_blessure">
            <label for="blessure_poignets">Poignets, main, doigt :</label>
            <ul>
                <li><input type="checkbox" name="blessure_poignets" value="gauche"> Gauche</li>
                <li><input type="checkbox" name="blessure_poignets" value="droit"> Droit</li>
                <li><input type="checkbox" name="blessure_poignets" value="aucun" id="blessure_poignets_aucun"> Aucun</li>
            </ul>
            </div>
            @error('blessure_poignets')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>
  
        <div class="champ">

            <div class="container_blessure">
            <label for="blessure_dos">Dos :</label>
            <ul>
                <li><input type="checkbox" name="blessure_dos" value="gauche"> Haut</li>
                <li><input type="checkbox" name="blessure_dos" value="droit"> Bas</li>
                <li><input type="checkbox" name="blessure_dos" value="aucun" id="blessure_dos_aucun"> Aucun</li>
            </ul>
            </div>
            @error('blessure_dos')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="champ">

            <div class="container_blessure">
            <label for="blessure_hanche">Hanche :</label>
            <ul>
                <li> <input type="checkbox" name="blessure_hanche" value="gauche"> Gauche</li>
                <li><input type="checkbox" name="blessure_hanche" value="droit"> Droit</li>
                <li><input type="checkbox" name="blessure_hanche" value="aucun" id="blessure_hanche_aucun"> Aucun</li>
            </ul>
            </div>
            @error('blessure_hanche')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>
  
        <div class="champ">

            <div class="container_blessure">
            <label for="blessure_jambe">Jambe, genou :</label>
            <ul>
                <li><input type="checkbox" name="blessure_jambe" value="gauche"> Gauche</li>
                <li><input type="checkbox" name="blessure_jambe" value="droit"> Droit</li>
                <li><input type="checkbox" name="blessure_jambe" value="aucun" id="blessure_jambe_aucun"> Aucun</li>
            </ul>
            </div>
            @error('blessure_jambe')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>
  
        <div class="champ">

            <div class="container_blessure">
            <label for="blessure_pied">Pied, orteil, cheville :</label>
            <ul>
                <li><input type="checkbox" name="blessure_pied" value="gauche"> Gauche</li>
                <li><input type="checkbox" name="blessure_pied" value="droit"> Droit</li>
                <li><input type="checkbox" name="blessure_pied" value="aucun" id="blessure_pied_aucun"> Aucun</li>
            </ul>
            </div>
            @error('blessure_pied')
                <div class="error">{{ $message }}</div>
            @enderror
        
        </div>

        <div class="champ">

            <div class="container_blessure">
            <label for="blessure_autre">Autres :</label>
            <ul>
                <li><input type="text" name="blessure_autre" value="{{ old('blessure_autre') }}" > </li>
            </ul>
            </div>
            @error('blessure_autre')
                <div class="error">{{ $message }}</div>
            @enderror
        
        </div>

        <div class="champ">

            <div class="checkbox-group">
                <label>Description de la blessure (cochez toutes les blessures pertinentes) :</label>
                <ul>
                <li><input type="checkbox" name="description_blessure[]" value="Brûlure">Brûlure</li>
                <li><input type="checkbox" name="description_blessure[]" value="Écrasement">Écrasement</li>
                <li><input type="checkbox" name="description_blessure[]" value="Commotion cérébrale">Commotion cérébrale</li>
                <li><input type="checkbox" name="description_blessure[]" value="Corps étranger">Corps étranger</li>
                <li><input type="checkbox" name="description_blessure[]" value="Coupure/lacération/déchirure">Coupure/lacération/déchirure</li>
                <li><input type="checkbox" name="description_blessure[]" value="Douleur au dos">Douleur au dos</li>
                <li><input type="checkbox" name="description_blessure[]" value="Égratignures/éraflure/piqûre/écharde">Égratignures/éraflure/piqûre/écharde</li>
                <li><input type="checkbox" name="description_blessure[]" value="Entorse/élongation/contusion/foulure/luxation">Entorse/élongation/contusion/foulure/luxation</li>
                <li><input type="checkbox" name="description_blessure[]" value="Fracture">Fracture</li>
                <li><input type="checkbox" name="description_blessure[]" value="Amputation">Amputation</li>
                <li><input type="checkbox" name="description_blessure[]" value="Irritation/infection">Irritation/infection</li>
                <li><input type="checkbox" name="description_blessure[]" value="Inhalation">Inhalation</li>
                <li><input type="checkbox" name="description_blessure[]" value="Autres">Autres</li>
                </ul>    
            </div>
            @error('description_blessure')
            <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="champ">

            <div class="checkbox-group">
            <label>Violence (cochez s'il y a lieu) :</label>
            <input type="checkbox" name="violence[]" value="Physique">Physique
            <input type="checkbox" name="violence[]" value="Verbal">Verbal
            </div>
            @error('violence')
            <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="champ">

            <label for="tache">Description de la tâche effectuée :</label>
            <textarea name="tache" value="{{ old('tache') }}" rows="4" cols="50" ></textarea>  
            @error('tache')
            <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="champ">

            <label for="soin">Premiers soins :</label>
            <textarea name="soin" value="{{ old('soin') }}" rows="4" cols="50" ></textarea>  
            @error('soin')
            <div class="error">{{ $message }}</div>
            @enderror

        </div>

        <div class="champ">

            <label for="secouriste">Nom du secouriste :</label>
            <input type="text" name="secouriste" value="{{ old('secouriste') }}">  
            @error('secouriste')
            <div class="error">{{ $message }}</div>
            @enderror
        
        </div>


        <!--Détails sur le durée de l'absence-->
        <div class = "absence_container">
            <h5>Détails sur le durée de l'absence</h5>
            <label>Absence (cochez l'une des options):</label>

            <div class="champ">

                <div class="absence">
                    <input type="radio" name="absence" value="aucune_absence" id="absence_aucune">
                    <label for="absence_aucune">Accident nécessitant aucune absence</label>
                </div>
                <div class="absence">
                    <input type="radio" name="absence" value="absence" id="absence_consultation">
                    <label for="absence_consultation">Accident nécessitant une consultation</label>
                </div>
                @error('absence')
                <div class="error">{{ $message }}</div>
                @enderror

            </div>
        

            <div class="champ">

                <div class="superieur-group">
                    <label for="superieur">J'ai avisé mon supérieur immédiat :</label>
                    <div class="checkbox_sup">
                        <input type="radio" name="checkbox_sup" value="Oui" id="sup_oui">
                        <label for="sup_oui" id="label_sup_oui">Oui</label>
                        <input type="radio" name="checkbox_sup" value="Non" id="sup_non">
                        <label for="sup_non" id="label_sup_non">Non</label>   
                    </div>
                    @error('superieur')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

            </div>
        
    
        </div>
        <input type="submit" value="Soumettre">
    </form>



</div>
    <script src="{{ asset('js/formulaire.js') }}"></script>
</body>
</html>


@endsection
