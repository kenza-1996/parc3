<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("personnels")->insert([

            ["nom"=>"khelil","prenom"=>"nawel","email"=>"khelil@gmail.com","num_bureau"=>"1","matricule"=>"5595+","structure_id"=>"4","created_at"=>"2021-08-25 13:08:13"],
            
            
            ["nom"=>"kasmi","prenom"=>"kenza","email"=>"kasmi@gmail.com","num_bureau"=>"12","matricule"=>"559566","structure_id"=>"5","created_at"=>"2021-08-25 13:08:13"],

        ]);
    }
}
