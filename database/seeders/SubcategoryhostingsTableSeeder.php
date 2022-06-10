<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategoryhosting;

class SubcategoryhostingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategoryhosting::create([
            'name' => 'Hosting Linux',    
            'slug' => 'hosting-linux', 
            'image' => 'public/subcategoryhosting/subcategory1.jpg', 
            'description' => 'hosting-linux hosting-linux hosting-linuxhosting-linuxhosting-linuxhosting-linux', 
            'keywords' => 'Hosting linux',
            'state' => 1,    
            'categoryhosting_id'=>1,
            'user_id'=> 1
        ]);

        Subcategoryhosting::create([
            'name' => 'Hosting Windows',    
            'slug' => 'hosting-windows', 
            'image' => 'public/subcategoryhosting/subcategory2.jpg', 
            'description' => 'Solucion en Diseño webSolucion en Diseño webSolucion en Diseño webSolucion en Diseño web', 
            'keywords' => 'Hosting windows',
            'state' => 1,
            'categoryhosting_id'=>1,          
            'user_id'=> 1
        ]);
    }
}
