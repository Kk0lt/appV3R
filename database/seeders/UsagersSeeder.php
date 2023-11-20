<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use DB;

class UsagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([

            [               
                'username' => 'mpepin',
                'password' => Hash::make('Password123'),
                'nom' => 'Pépin',
                'prenom' => 'Marc',
                'type' => 'employe'
            ],            
            [               
                'username' => 'creid',
                'password' => Hash::make('Password123'),
                'nom' => 'Reid',
                'prenom' => 'Claudine',
                'type' => 'employe'
            ],            
            [               
                'username' => 'ptemps',
                'password' => Hash::make('Password123'),
                'nom' => 'Temps',
                'prenom' => 'Paul',
                'type' => 'employe'
            ],         
            [               
                'username' => 'jdow',
                'password' => Hash::make('Password123'),
                'nom' => 'Dow',
                'prenom' => 'Jane',
                'type' => 'superieur'
            ],            
            [               
                'username' => 'jmorinville',
                'password' => Hash::make('Password123'),
                'nom' => 'Morinville',
                'prenom' => 'Jonathan',
                'type' => 'admin'
            ],            
            [               
                'username' => 'alizotte',
                'password' => Hash::make('Password123'),
                'nom' => 'Lizotte',
                'prenom' => 'Alain',
                'type' => 'employe'
            ],            
            [               
                'username' => 'mlevesque',
                'password' => Hash::make('Password123'),
                'nom' => 'Levesque',
                'prenom' => 'Michèle ',
                'type' => 'employe'
            ],            
            [               
                'username' => 'jstlaurent',
                'password' => Hash::make('Password123'),
                'nom' => 'St-Laurent',
                'prenom' => 'Josée ',
                'type' => 'employe'
            ],            
            [               
                'username' => 'cbelisle',
                'password' => Hash::make('Password123'),
                'nom' => 'Belisle',
                'prenom' => 'Claude',
                'type' => 'admin'
            ]
        ]); 
    }
}
