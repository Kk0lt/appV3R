<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;



class EmployesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employes')->insert([

            [               
                'nom' => 'Pépin',
                'prenom' => 'Marc',
                'position' => 'Journalier TP',

                'superieur_nom' => 'Jane Dow',
                'superieur_id' => 4,

                'droit_employe' => 'oui',
                'doit_superieur' => 'non',
                'doit_admin' => 'non',
            ],
            [               
                'nom' => 'Reid',
                'prenom' => 'Claudine',
                'position' => 'Journalier TP',

                'superieur_nom' => 'Jane Dow',
                'superieur_id' => 4,

                'droit_employe' => 'oui',
                'doit_superieur' => 'non',
                'doit_admin' => 'non',
            ],
            [               
                'nom' => 'Temps',
                'prenom' => 'Paul',
                'position' => 'Journalier TP',
                'superieur_nom' => 'Jane Dow',
                'superieur_id' => 4,
                'droit_employe' => 'oui',
                'doit_superieur' => 'non',
                'doit_admin' => 'non',
            ],
            [               
                'nom' => 'Dow',
                'prenom' => 'Jane',
                'position' => 'Cheffe d\'équipe TP', 

                'superieur_nom' => 'Jonathan Morinville',
                'superieur_id' => 14,

                'droit_employe' => 'oui',
                'doit_superieur' => 'oui',
                'doit_admin' => 'non',
            ],
            [               
                'nom' => 'Morinville',
                'prenom' => 'Jonathan',
                'position' => 'Chef de service TP', 

                'superieur_nom' => 'Alain Lizotte',
                'superieur_id' => 15,
                
                'droit_employe' => 'oui',
                'doit_superieur' => 'oui',
                'doit_admin' => 'non',
            ],
            [               
                'nom' => 'Lizotte',
                'prenom' => 'Alain',
                'position' => 'Directeur TP', 

                'superieur_nom' => 'aucun',
                'superieur_id' => 0,
                
                'droit_employe' => 'oui',
                'doit_superieur' => 'oui',
                'doit_admin' => 'non',
            ],
            [               
                'nom' => 'Levesque',
                'prenom' => 'Michèle ',
                'position' => 'Conseillère SST',    

                'superieur_nom' => 'Josée St-Laurent',
                'superieur_id' => 17,
                
                'droit_employe' => 'oui',
                'doit_superieur' => 'non',
                'doit_admin' => 'non',
            ],            
            [               
                'nom' => 'St-Laurent',
                'prenom' => 'Josée ',
                'position' => 'Coordonnatrice SST',

                'superieur_nom' => 'Claude Belisle',
                'superieur_id' => 18,
                
                'droit_employe' => 'oui',
                'doit_superieur' => 'oui',
                'doit_admin' => 'oui',
            ],
            [               
                'nom' => 'Belisle',
                'prenom' => 'Claude',
                'position' => 'Directeur RH',

                'superieur_nom' => 'aucun',
                'superieur_id' => 0,
                
                'droit_employe' => 'oui',
                'doit_superieur' => 'oui',
                'doit_admin' => 'non',
            ],

        ]);   
    }
}
