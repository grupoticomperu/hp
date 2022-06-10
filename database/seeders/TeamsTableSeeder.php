<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'Michael Cabello Alvino',    
            'slug' => 'michael-cabello-alvino', 
            'profesion' => 'Ing. de sistemas', 
            'rol' => 'Gte de Sistemas', 
            'shortdescription' => 'Michael Cabello Cliente web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Michael Cabello Cliente Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'image' => 'public/team/team1.jpg',
            'state' => 1,
            'facebook' => 'https://facebook.com/',
            'youtube' => 'https://youtube.com/',
            'twitter' => 'https://twitter.com/',
            'instagram' => 'https://instagram.com/',
            'user_id'=> 1
        ]);


        Team::create([
            'name' => 'Michael Cabello Alvino2',    
            'slug' => 'michael-cabello-alvino', 
            'profesion' => 'Ing. de sistemas', 
            'rol' => 'Gte de Sistemas', 
            'shortdescription' => 'Michael Cabello Cliente web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Michael Cabello Cliente Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'image' => 'public/team/team1.jpg',
            'state' => 1,
            'facebook' => 'https://facebook.com/',
            'youtube' => 'https://youtube.com/',
            'twitter' => 'https://twitter.com/',
            'instagram' => 'https://instagram.com/',
            'user_id'=> 1
        ]);



        Team::create([
            'name' => 'Michael Cabello Alvino3',    
            'slug' => 'michael-cabello-alvino', 
            'profesion' => 'Ing. de sistemas', 
            'rol' => 'Gte de Sistemas', 
            'shortdescription' => 'Michael Cabello Cliente web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Michael Cabello Cliente Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'image' => 'public/team/team1.jpg',
            'state' => 1,
            'facebook' => 'https://facebook.com/',
            'youtube' => 'https://youtube.com/',
            'twitter' => 'https://twitter.com/',
            'instagram' => 'https://instagram.com/',
            'user_id'=> 1
        ]);




    }
}
