<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoryservice;

class CategoryservicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoryservice::create([
            'name' => 'SOLUCIONES WEB',    
            'slug' => 'soluciones-web', 
            'image' => 'public/categoryservice/category1.jpg', 
            'description' => 'Solucion en Diseño webSolucion en Diseño webSolucion en Diseño webSolucion en Diseño web', 
            'state' => 1,          
            'user_id'=> 1
        ]);
    }
}
