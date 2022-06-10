<?php

namespace Database\Seeders;

use App\Models\Hosting;
use Illuminate\Database\Seeder;


class HostingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hosting::create([
            'title' => 'Plan empresarial',    
            'slug' => 'hosting-linux-plan-empresarial', 
            'storage' => '2000MB',
            'bandwidth' => '10GB',
            'cpanel' => 'propio',
            'emails' => 'ilimitados', 
            'bd' => 'ilimitados',
            'price' => 200.00, 
            'shortdescription' => 'Hosting descripcion corta',
            'longdescription' => 'Hosting descripcion larga',
            'state' => 1, 
            'subcategoryhosting_id' => 1, 
            'user_id'=> 1
        ]);

        Hosting::create([
            'title' => 'Plan corporativo',    
            'slug' => 'hosting-linux-plan-corporativo', 
            'storage' => '2000MB',
            'bandwidth' => '10GB',
            'cpanel' => 'propio',
            'emails' => 'ilimitados', 
            'bd' => 'ilimitados',
            'price' => 200.00, 
            'shortdescription' => 'Hosting descripcion corta',
            'longdescription' => 'Hosting descripcion larga',
            'state' => 1, 
            'subcategoryhosting_id' => 1, 
            'user_id'=> 1
        ]);

        Hosting::create([
            'title' => 'Plan profesional',    
            'slug' => 'hosting-linux-plan-profesional', 
            'storage' => '2000MB',
            'bandwidth' => '10GB',
            'cpanel' => 'propio',
            'emails' => 'ilimitados', 
            'bd' => 'ilimitados',
            'price' => 200.00, 
            'shortdescription' => 'Hosting descripcion corta',
            'longdescription' => 'Hosting descripcion larga',
            'state' => 1, 
            'subcategoryhosting_id' => 1, 
            'user_id'=> 1
        ]);


  
        Hosting::create([
            'title' => 'Plan silver',    
            'slug' => 'hosting-linux-plan-silver', 
            'storage' => '10000 MB',
            'bandwidth' => '100 GB',
            'cpanel' => 'propio',
            'emails' => 'ilimitados', 
            'bd' => 'ilimitados',
            'price' => 400.00, 
            'shortdescription' => 'Hosting descripcion corta',
            'longdescription' => 'Hosting descripcion larga',
            'state' => 1, 
            'subcategoryhosting_id' => 1, 
            'user_id'=> 1
        ]);

        

        Hosting::create([
            'title' => 'Plan gold',    
            'slug' => 'hosting-linux-plan-gold', 
            'storage' => '10000 MB',
            'bandwidth' => '100 GB',
            'cpanel' => 'propio',
            'emails' => 'ilimitados', 
            'bd' => 'ilimitados',
            'price' => 400.00, 
            'shortdescription' => 'Hosting descripcion corta',
            'longdescription' => 'Hosting descripcion larga',
            'state' => 1, 
            'subcategoryhosting_id' => 1, 
            'user_id'=> 1
        ]);





        
    }
}
