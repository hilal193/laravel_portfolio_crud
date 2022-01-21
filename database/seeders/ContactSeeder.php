<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            [
                "nom"=>"DBZ",
                "email"=>"DBZ@gmail.com",
                "titre"=>"bdbdbdbdbdbdbbdbd",
                "description"=>"manga"
            ],

        ]);
    }
}
