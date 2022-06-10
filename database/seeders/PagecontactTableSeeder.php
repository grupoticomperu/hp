<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Pagecontact;

class PagecontactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pagecontact::create([
            'title' => 'empresa de diseño web Contáctenos',
            'title1' => 'Contáctenos', 
            'title2' => 'Envienos un Mensaje', 
            'saludo' => 'Escribenos y lo más pronto estaremos en contacto con Ud.',   
            'imagen' => 'public/contact/ticom-contacto.jpg',  
            'description' => 'Diseño de páginas web', 
            'keywords' => 'creacion de paginas web', 
            'user_id'=> 1
        ]);



    }
}
