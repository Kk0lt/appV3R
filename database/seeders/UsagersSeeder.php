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

            [             //1  
                'username' => 'mpepin',
                'password' => Hash::make('Password123'),
                'nom' => 'Pépin',
                'prenom' => 'Marc',
                'type' => 'employe'
            ],            
            [            //2   
                'username' => 'creid',
                'password' => Hash::make('Password123'),
                'nom' => 'Reid',
                'prenom' => 'Claudine',
                'type' => 'employe'
            ],            
            [              //3 
                'username' => 'ptemps',
                'password' => Hash::make('Password123'),
                'nom' => 'Temps',
                'prenom' => 'Paul',
                'type' => 'employe'
            ],         
            [             //4  
                'username' => 'jdow',
                'password' => Hash::make('Password123'),
                'nom' => 'Dow',
                'prenom' => 'Jane',
                'type' => 'superieur'
            ],            
            [             //5  
                'username' => 'jmorinville',
                'password' => Hash::make('Password123'),
                'nom' => 'Morinville',
                'prenom' => 'Jonathan',
                'type' => 'admin'
            ],            
            [             //6  
                'username' => 'alizotte',
                'password' => Hash::make('Password123'),
                'nom' => 'Lizotte',
                'prenom' => 'Alain',
                'type' => 'superieur'
            ],            
            [              //7 
                'username' => 'mlevesque',
                'password' => Hash::make('Password123'),
                'nom' => 'Levesque',
                'prenom' => 'Michèle ',
                'type' => 'employe'
            ],            
            [              //8 
                'username' => 'jstlaurent',
                'password' => Hash::make('Password123'),
                'nom' => 'St-Laurent',
                'prenom' => 'Josée ',
                'type' => 'employe'
            ],            
            [               //9
                'username' => 'cbelisle',
                'password' => Hash::make('Password123'),
                'nom' => 'Belisle',
                'prenom' => 'Claude',
                'type' => 'admin'
            ]
        ]); 
    }
}
