<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Photo;
use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class
        ]);

        DB::table("equipes")->insert([
            "nom" => "Sans équipe",
            "pays" => " ",
            "continent" => " ",
            "attaquant" => 999,
            "central" => 999,
            "defenseur" => 999,
            "remplacant" => 999,
        ]);
        Equipe::factory(12)->create(); // ORDER 1
        Joueur::factory(45)->create(); // ORDER 2
        Photo::factory(45)->create(); // ORDER 3

    }
}
