<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Offer;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offer::create([
            'image' => 'loguito.jpg',    
            'title' => 'Enfoque Global', 
            'description' => 'Solución Completa desde registro de dominio, hosting, web ..', 
            'url' => '#', 
            'state'=>1,
            'texto' => 'Ver más', 
            'user_id'=> 1
        ]);

        Offer::create([
            'image' => 'loguito.jpg',    
            'title' => 'Dirigido al Cliente', 
            'description' => 'Solución Completa desde registro de dominio, hosting, web ..', 
            'url' => '#', 
            'state'=>1,
            'texto' => 'Ver más', 
            'user_id'=> 1
        ]);

        Offer::create([
            'image' => 'loguito.jpg',    
            'title' => 'Para el Logro de tu éxito', 
            'description' => 'Solución Completa desde registro de dominio, hosting, web ..', 
            'url' => '#', 
            'state'=>1,
            'texto' => 'Ver más', 
            'user_id'=> 1
        ]);

    }
}
