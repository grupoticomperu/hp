<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'Nosotros', 
            'our' => 'Somos una empresa especializado en brindar soluciones web para tu negocio:',    
            'mission' => 'Nuestra Mission una empresa especializado en brindar soluciones web para tu negocio:',    
            'vission' => 'Nuestra Vision una empresa especializado en brindar soluciones web para tu negocio', 
            'imagen1' => 'public/about/ticom-fondo.jpg', 
            'imagen2' => 'public/about/ticom-diseno-web.jpg', 
            'description' => 'Diseño de páginas web', 
            'keywords' => 'creacion de paginas web', 
            'user_id'=> 1
        ]);
    }
}
