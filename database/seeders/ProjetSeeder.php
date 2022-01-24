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
                "image"=> "img/works/1.jpg",
                "titre"=>"CHEF",
                "description"=>"HTML",
                "filter"=>"Projet"
            ],
            [
                "image"=> "img/works/2.jpg",
                "titre"=>"IMAGELAYOUT",
                "description"=>"CSS",
                "filter"=>"Illustrator"
            ],
            [
                "image"=> "img/works/3.jpg",
                "titre"=>"JEUX",
                "description"=>"JAVASCRIPT",
                "filter"=>"Indesign"
            ],
            [
                "image"=> "img/works/4.jpg",
                "titre"=>"LARAVEL",
                "description"=>"PHP",
                "filter"=>"Exercices"
            ],
            [
                "image"=> "img/works/5.jpg",
                "titre"=>"REACT_PROJET",
                "description"=>"REACT",
                "filter"=>"Projet"
            ],

        ]);
    }
}
