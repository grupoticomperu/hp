<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategoryservice;
class SubcategoryservicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategoryservice::create([
            'name' => 'Diseño de Páginas Web',    
            'slug' => 'diseno-de-paginas-web', 
            'image' => 'public/subcategoryservice/subcategory1.jpg', 
            'description' => 'Solucion en Diseño webSolucion en Diseño webSolucion en Diseño webSolucion en Diseño web', 
            'state' => 1,    
            'categoryservice_id'=>1,
            'user_id'=> 1
        ]);

        Subcategoryservice::create([
            'name' => 'Soluciones Ecommerce',    
            'slug' => 'soluciones-ecommerce', 
            'image' => 'public/subcategoryservice/subcategory2.jpg', 
            'description' => 'Solucion en Diseño webSolucion en Diseño webSolucion en Diseño webSolucion en Diseño web', 
            'state' => 1,
            'categoryservice_id'=>1,          
            'user_id'=> 1
        ]);

        Subcategoryservice::create([
            'name' => 'Sistemas Web',    
            'slug' => 'sistemas-web', 
            'image' => 'public/subcategoryservice/subcategory3.jpg', 
            'description' => 'Solucion en Diseño webSolucion en Diseño webSolucion en Diseño webSolucion en Diseño web', 
            'state' => 1,
            'categoryservice_id'=>1,          
            'user_id'=> 1
        ]);
        Subcategoryservice::create([
            'name' => 'Marketing Online',    
            'slug' => 'marketing-online', 
            'image' => 'public/subcategoryservice/subcategory4.jpg', 
            'description' => 'Solucion en Diseño webSolucion en Diseño webSolucion en Diseño webSolucion en Diseño web', 
            'state' => 1, 
            'categoryservice_id'=>1,         
            'user_id'=> 1
        ]);

        Subcategoryservice::create([
            'name' => 'Posicionamiento Web',    
            'slug' => 'posicionamiento-web', 
            'image' => 'public/subcategoryservice/subcategory5.jpg', 
            'description' => 'Solucion en Diseño webSolucion en Diseño webSolucion en Diseño webSolucion en Diseño web', 
            'state' => 1,  
            'categoryservice_id'=>1,        
            'user_id'=> 1
        ]);





        

    }
}
