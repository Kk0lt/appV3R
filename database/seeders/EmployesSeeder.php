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
            ],
            [               
                'nom' => 'Reid',
                'prenom' => 'Claudine',
                'position' => 'Journalier TP',
            ],
            [               
                'nom' => 'Temps',
                'prenom' => 'Paul',
                'position' => 'Journalier TP',
            ],
            [               
                'nom' => 'Dow',
                'prenom' => 'Jane',
                'position' => 'Cheffe d\'équipe TP',
            ],
            [               
                'nom' => 'Morinville',
                'prenom' => 'Jonathan',
                'position' => 'Chef de service TP',
            ],
            [               
                'nom' => 'Lizotte',
                'prenom' => 'Alain',
                'position' => 'Directeur TP',
            ],
            [               
                'nom' => 'Levesque',
                'prenom' => 'Michèle ',
                'position' => 'Conseillère SST',
            ],            
            [               
                'nom' => 'St-Laurent',
                'prenom' => 'Josée ',
                'position' => 'Coordonnatrice SST',
            ],
            [               
                'nom' => 'Belisle',
                'prenom' => 'Claude  ',
                'position' => 'Directeur RH',
            ],

        ]);   
    }
}
