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

            [   //1        
                'nom' => 'Pépin',
                'prenom' => 'Marc',
                'email' => 'appv3r@gmail.com',
                'position' => 'Journalier TP',

                'superieur_nom' => 'Jane Dow',
                'superieur_id' => 4,

                'droit_employe' => 'oui',
                'droit_superieur' => 'non',
                'droit_admin' => 'non',
            ],
            [   //2            
                'nom' => 'Reid',
                'prenom' => 'Claudine',
                'email' => 'appv3r@gmail.com',
                'position' => 'Journalier TP',

                'superieur_nom' => 'Jane Dow',
                'superieur_id' => 4,

                'droit_employe' => 'oui',
                'droit_superieur' => 'non',
                'droit_admin' => 'non',
            ],
            [   //3         
                'nom' => 'Temps',
                'prenom' => 'Paul',
                'email' => 'appv3r@gmail.com',
                'position' => 'Journalier TP',
                'superieur_nom' => 'Jane Dow',
                'superieur_id' => 4,
                'droit_employe' => 'oui',
                'droit_superieur' => 'non',
                'droit_admin' => 'non',
            ],
            [   //4         
                'nom' => 'Dow',
                'prenom' => 'Jane',
                'email' => 'appv3r@gmail.com',
                'position' => 'Cheffe d\'équipe TP', 

                'superieur_nom' => 'Jonathan Morinville',
                'superieur_id' => 5,

                'droit_employe' => 'oui',
                'droit_superieur' => 'oui',
                'droit_admin' => 'non',
            ],
            [   //5         
                'nom' => 'Morinville',
                'prenom' => 'Jonathan',
                'email' => 'appv3r@gmail.com',
                'position' => 'Chef de service TP', 

                'superieur_nom' => 'Alain Lizotte',
                'superieur_id' => 6,
                
                'droit_employe' => 'oui',
                'droit_superieur' => 'oui',
                'droit_admin' => 'oui',
            ],
            [   //6         
                'nom' => 'Lizotte',
                'prenom' => 'Alain',
                'email' => 'appv3r@gmail.com',
                'position' => 'Directeur TP', 

                'superieur_nom' => 'aucun',
                'superieur_id' => 0,
                
                'droit_employe' => 'oui',
                'droit_superieur' => 'oui',
                'droit_admin' => 'non',
            ],
            [   //7         
                'nom' => 'Levesque',
                'prenom' => 'Michèle ',
                'email' => 'appv3r@gmail.com',
                'position' => 'Conseillère SST',    

                'superieur_nom' => 'Josée St-Laurent',
                'superieur_id' => 8,
                
                'droit_employe' => 'oui',
                'droit_superieur' => 'non',
                'droit_admin' => 'non',
            ],            
            [   //8         
                'nom' => 'St-Laurent',
                'prenom' => 'Josée ',
                'email' => 'appv3r@gmail.com',
                'position' => 'Coordonnatrice SST',

                'superieur_nom' => 'Claude Belisle',
                'superieur_id' => 9,
                
                'droit_employe' => 'oui',
                'droit_superieur' => 'oui',
                'droit_admin' => 'oui',
            ],
            [   //9         
                'nom' => 'Belisle',
                'prenom' => 'Claude',
                'email' => 'appv3r@gmail.com',
                'position' => 'Directeur RH',

                'superieur_nom' => 'aucun',
                'superieur_id' => 0,
                
                'droit_employe' => 'oui',
                'droit_superieur' => 'oui',
                'droit_admin' => 'non',
            ],

        ]);   
    }
}
