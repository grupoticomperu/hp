<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Configuration;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'logo' => 'public/logo/ticom.jpg',    
            'icon' => '#', 
            'telephono' => '7959969', 
            'movil' => '996929478', 
            'facebook' => '#', 
            'youtube' => '#', 
            'instagram' => '#', 
            'description' => 'Somos una empresa especializada en brindar soluciones tecnologicas en web',
            'email' => 'informes@ticomperu.com',
            'address' => 'Av Petit Thouars 1255 Lima Lima',
            'user_id'=> 1
        ]);
    }
}
