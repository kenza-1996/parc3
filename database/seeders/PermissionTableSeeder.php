<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ["nom"=> "ajouter un materiel"],
            ["nom"=> "consulter un materiel"],
            ["nom"=> "editer un materiel"],
            ["nom"=> "supprimer un materiel"],

            ["nom"=> "ajouter une utilisateur"],
            ["nom"=> "consulter une utilisateur"],
            ["nom"=> "editer une utilisateur"],
            ["nom"=> "supprimer un utilisateur"],

            ["nom"=> "ajouter un reparateur"],
            ["nom"=> "consulter un reparateur"],
            ["nom"=> "editer un reparateur"],
            ["nom"=> "supprimer un reparateur"],
        ]);
    }
}
