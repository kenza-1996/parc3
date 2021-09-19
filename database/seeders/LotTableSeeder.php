<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("lots")->insert([

            ["num_lot"=>"11/2020/RDC/DAG/ACHAT","num_ao"=>"02/C/ELIT/2020","num_ap"=>"82 CV 0437 8400","fournisseur"=>"CBS","qte"=>"25","cout"=>"92750000","modele_id"=>"1","categorie_id"=>"1","marque_id"=>"1","dateAchat"=>"2021-07-8","created_at"=>"2021-08-25 13:08:13"],
            
            
            ["num_lot"=>"11/2020/RDC/DAG/ACHAT2","num_ao"=>"02/C/ELIT/2020","num_ap"=>"82 CV 0437 8400","fournisseur"=>"CBS","qte"=>"35","cout"=>"52750000","modele_id"=>"2","categorie_id"=>"2","marque_id"=>"3","dateAchat"=>"2021-07-8","created_at"=>"2021-08-25 13:08:13"],
           

        ]);
    }
}
