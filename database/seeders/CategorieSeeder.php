<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            ["nom"=>"Unite Centrale","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Ecran Led","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Imprimante Multifonction","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Switch","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Ecran Lcd","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Laptop","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Imprimante Laser","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Imprimante Matricielle","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Imprimante Ticket Caisse","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Imprimante Jet Dencre","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Imprimante Laser Couleur","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Ecran Tube Cathodique","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Onduleur","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Scanner","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Modem","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"DataShow","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Photocopieur","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Lecteur QR","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Table Tracente","created_at"=>"2021-08-25 13:08:13"],
            ["nom"=>"Imprimante CodeBarre","created_at"=>"2021-08-25 13:08:13"]
        ]);
    }
}
