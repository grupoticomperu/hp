<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Work::create([
            'title' => 'cliente uno', 
            'customer' => "alltronics",   
            'slug' => 'cliente-uno', 
            'image' => 'public/work/work1.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);


        Work::create([
            'title' => 'cliente dos',
            'customer' => "csr",  
            'slug' => 'cliente-dos', 
            'image' => 'public/work/work2.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente dos web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente dos Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);

        Work::create([
            'title' => 'cliente tres',
            'customer' => "Boxer",  
            'slug' => 'cliente-tres', 
            'image' => 'public/work/work3.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente tres web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente tres Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);

        Work::create([
            'title' => 'cliente cuatro',
            'customer' => "triathlon sport",  
            'slug' => 'cliente-cuatro', 
            'image' => 'public/work/work4.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente cuatro web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente cuatro Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);


        Work::create([
            'title' => 'cliente cinco',
            'customer' => "telefonica",  
            'slug' => 'cliente-cinco', 
            'image' => 'public/work/work4.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente cinco web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente cinco Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);


        Work::create([
            'title' => 'cliente seis',
            'customer' => "claro",  
            'slug' => 'cliente-seis', 
            'image' => 'public/work/work4.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente seis web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente seis Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);


        Work::create([
            'title' => 'cliente siete',
            'customer' => "BBVA",  
            'slug' => 'cliente-siete', 
            'image' => 'public/work/work4.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente siete web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente siete Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);



        Work::create([
            'title' => 'cliente ocho',
            'customer' => "atento",  
            'slug' => 'cliente-ocho', 
            'image' => 'public/work/work4.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente ocho web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente ocho Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);


        Work::create([
            'title' => 'cliente nueve',
            'customer' => "redes neuro",  
            'slug' => 'cliente-nueve', 
            'image' => 'public/work/work4.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente nueve web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente nueve Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);


        Work::create([
            'title' => 'cliente diez',
            'customer' => "dectronic",  
            'slug' => 'cliente-diez', 
            'image' => 'public/work/work4.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente diez web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente diez Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);


        Work::create([
            'title' => 'cliente once',
            'customer' => "finca schu",  
            'slug' => 'cliente-once', 
            'image' => 'public/work/work4.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente once web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente once Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);


        Work::create([
            'title' => 'cliente doce',
            'customer' => "trodat",  
            'slug' => 'cliente-doce', 
            'image' => 'public/work/work4.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente doce web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente doce Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);

        Work::create([
            'title' => 'cliente trece',
            'customer' => "printy",  
            'slug' => 'cliente-trece', 
            'image' => 'public/work/work4.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente trece web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente trece Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);

        Work::create([
            'title' => 'cliente catorce',
            'customer' => "alltronics",  
            'slug' => 'cliente-catorce', 
            'image' => 'public/work/work4.jpg',
            'website' => 'http://www.ticomperu.com',
            'shortdescription' => 'Cliente catorce web PeruDiseño web PeruDiseño web PeruDiseño web PeruDiseño web Peru', 
            'longdescription' => 'Cliente catorce Diseño web PeruDiseweb PeruDiseño web PeruDiseño web PeruDiseño uDiseño web PeruDiseño web Peru0',
            'user_id'=> 1
        ]);




    }
}
