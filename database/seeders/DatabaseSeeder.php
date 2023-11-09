<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UsagersSeeder::class);
        $this->call(AdminsSeeder::class);
        $this->call(EmployesSeeder::class);
        
        $this->call(FormAccidentTravails::class);
        $this->call(grilleAuditSstsSeeder::class);
        $this->call(FormulairesSeeder::class);
        $this->call(ProceduresSeeder::class);
        $this->call(SuperieursSeeder::class);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
