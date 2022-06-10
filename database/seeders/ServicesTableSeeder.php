<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title' => 'Diseño web Peru',    
            'slug' => 'dielo-web-peru', 
            'imagen1' => 'public/service/servicio1.jpg',
            'imagen2' => 'public/service/servicio2.jpg',
            'imagen3' => 'public/service/servicio3.jpg',
            'shortdescription' => 'Diseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Diseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru0',
            'subcategoryservice_id' => 1, 
            'user_id'=> 1
        ]);


        Service::create([
            'title' => 'Soluciones Ecommerce',    
            'slug' => 'soluciones-ecommerce', 
            'imagen1' => 'public/service/servicio1.jpg',
            'imagen2' => 'public/service/servicio2.jpg',
            'imagen3' => 'public/service/servicio3.jpg',
            'shortdescription' => 'Diseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Diseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru0',
            'subcategoryservice_id' => 2, 
            'user_id'=> 1
        ]);



    }
}
