<?php

namespace Database\Seeders;

use App\Models\Why;
use Illuminate\Database\Seeder;

class WhiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Why::create([   
            'title' => 'Enfoque Global', 
            'description' => 'Solución Completa desde registro de dominio, hosting, web ..', 
            'image' => 'linearicons-laptop-phone', 
            'state'=>1,
            'order' => 1
        ]);

        Why::create([   
            'title' => 'Enfoque Global', 
            'description' => 'Solución Completa desde registro de dominio, hosting, web ..', 
            'image' => 'linearicons-laptop-phone', 
            'state'=>1,
            'order' => 2
        ]);
        Why::create([   
            'title' => 'Enfoque Global', 
            'description' => 'Solución Completa desde registro de dominio, hosting, web ..', 
            'image' => 'linearicons-laptop-phone', 
            'state'=>1,
            'order' => 3
        ]);
    }
}
