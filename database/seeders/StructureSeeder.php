<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("structures")->insert([
            ["nom_struct"=>"DGSI ","created_at"=>"2021-08-25 13:08:13"],
            ["nom_struct"=>"SAG","created_at"=>"2021-08-25 13:08:13"],
            ["nom_struct"=>"DRC","created_at"=>"2021-08-25 13:08:13"],
            ["nom_struct"=>"DEET","created_at"=>"2021-08-25 13:08:13"],
            ["nom_struct"=>"DTG","created_at"=>"2021-08-25 13:08:13"],
            ["nom_struct"=>"DER","created_at"=>"2021-08-25 13:08:13"],
            ["nom_struct"=>"BCC","created_at"=>"2021-08-25 13:08:13"],
            ["nom_struct"=>"DTE","created_at"=>"2021-08-25 13:08:13"],
        
        ]);
    }
}
