<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                "image"=> "https://st.depositphotos.com/1898481/3858/i/600/depositphotos_38585251-stock-photo-unnamed.jpg",
                "titre"=>"Hilal",
                "description"=>"A product designer from England, who focuses on interactive design & A freelance designer focusing on typography & clean interfaces. Also works in Google..</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repellendus corporis, tenetur inventore perferendis reprehenderit autem dignissimos non quos unde eveniet sapiente necessitatibus consequuntur ea ab dolore, minus nam eaque."
            ],
            // [
            //     "image"=> "https://ae01.alicdn.com/kf/HTB1Wzv2KpXXXXc_XFXXq6xXFXXXR/Qunexc-dbz-goku-amis-Art-Silk-Affiche-24-x-32-pouces-porte-home-Decor-033.jpg",
            //     "titre"=>"DBZ",
            //     "description"=>"manga"
            // ],

        ]);
    }
}
