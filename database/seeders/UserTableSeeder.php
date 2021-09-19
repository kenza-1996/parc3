<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([

            ["nom"=>"khelil","prenom"=>"nawel","email"=>"khelil@gmail.com","sexe"=>"F","password"=>bcrypt('123456'),"created_at"=>"2021-08-25 13:08:13"],
            
            
            ["nom"=>"kasmi","prenom"=>"kenza","email"=>"kasmi@gmail.com","sexe"=>"F","password"=>bcrypt('123456'),"created_at"=>"2021-08-25 13:08:13"],
           
            ["nom"=>"kas","prenom"=>"ken","email"=>"kasm@gmail.com","sexe"=>"H","password"=>bcrypt('123456'),"created_at"=>"2021-08-25 13:08:13"],
          
            ["nom"=>"kasm","prenom"=>"kenz","email"=>"kas@gmail.com","sexe"=>"H","password"=>bcrypt('123456'),"created_at"=>"2021-08-25 13:08:13"],
            

        ]);
    }
}
