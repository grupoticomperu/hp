<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Homeservice;

class HomeservicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homeservice::create([
                
            'title' => 'Diseño de Páginas Web', 
            'description' => 'Somos una empresa especializada en el Diseño de Páginas Web.

            Contamos con un equipo de profesionales especializados en desarrollar proyectos de Diseño Web.
            
            Emprende el camino con nosotros y convertimos tu WebSite en una Herramienta de ventas.', 
            'url' => '#', 
            'texto' => 'Ver más', 
            'ubication' => 'derecha', 
            'state' => 1, 
            'image' => 'public/homeservices/servicio2.jpg',
            'user_id'=> 1
        ]);



        Homeservice::create([
                
            'title' => 'Creación de carrito de Compras', 
            'description' => 'Somos una empresa especializada en el crear ecommerce.

            Contamos con un equipo de profesionales especializados en desarrollar proyectos de Diseño Web.
            
            Emprende el camino con nosotros y convertimos tu WebSite en una Herramienta de ventas.', 
            'url' => '#', 
            'texto' => 'Ver más', 
            'ubication' => 'izquierda', 
            'state' => 1, 
            'image' => 'public/homeservices/servicio3.jpg',
            'user_id'=> 1
        ]);



    }
}
