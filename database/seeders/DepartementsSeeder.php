<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DepartementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departements')->insert([
            [
                'nom' => 'Direction générale',
            ],
            [
                'nom' => 'Approvisionnement',
            ],
            [
                'nom' => 'Communications et participation citoyenne',
            ],
            [
                'nom' => 'Finances',
            ],
            [
                'nom' => 'Greffe, gestion des documents et archives',
            ],
            [
                'nom' => 'Ressources humaines',
            ],
            [
                'nom' => 'Aménagement et développement durable',
            ],
            [
                'nom' => 'Bureau de projets et des actifs',
            ],
            [
                'nom' => 'Évaluation',
            ],
            [
                'nom' => 'Génie',
            ],
            [
                'nom' => 'Technologies de l\'information',
            ],
            [
                'nom' => 'Culture, loisirs et vie communautaire',
            ],
            [
                'nom' => 'Gestion des eaux et des immeubles',
            ],
            [
                'nom' => 'Police',
            ],
            [
                'nom' => 'Sécurité incendie et sécurité civile',
            ],
            [
                'nom' => 'Services juridiques',
            ],
            [
                'nom' => 'Travaux publics',
            ],
        ]);
        
    }
}
