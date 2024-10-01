<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alimantation;
use FiberError;
use App\Models\Animal;
use App\Models\Client;
use App\Models\Docteur;
use App\Models\EtatSante;
use App\Models\FicheControle;
use App\Models\Produit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $doctteur = Docteur::factory(10)->create();
        $etat = EtatSante::factory(10)->create();
       $animal = Animal::factory(10)->create();
       Produit::factory(10)->create();
       //Alimantation::factory(10)->create();
       Client::factory(20)->create();

       //FicheControle::factory(10)->create();


    }
}
