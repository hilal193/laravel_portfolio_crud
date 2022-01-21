<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projets')->insert([

            [
                "image"=> "https://topdata.news/wp-content/uploads/2021/04/Bleach-Saison-17Sj5HtrX6X.jpg",
                "titre"=>"CHEF",
                "description"=>"HTML"
            ],

        ]);
    }
}
