<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User,Agent,Ville,Quartier,Appartement,AppartCategory,State,Autorisation};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Ville::insert([
            ['nom'=>'Madrid','image'=>'ceci est le lien vers l\'image']
        ]);
        State::insert([
            ['nom'=>"etat 1",'slug'=>'slug','color'=>'couleur'],
            ['nom'=>"etat 2",'slug'=>'slug','color'=>'couleur'],
            ['nom'=>"etat 3",'slug'=>'slug','color'=>'couleur'],
            ['nom'=>"etat 4",'slug'=>'slug','color'=>'couleur']
        ]);
        Quartier::factory()->count(10)->create();
        User::factory()->count(10)->create();
        Agent::factory()->count(10)->create();
        AppartCategory::factory()
            ->count(5)
            ->has(Appartement::factory()->count(10))
            ->create();
        Autorisation::factory()->count(5)->create();
    }
}
