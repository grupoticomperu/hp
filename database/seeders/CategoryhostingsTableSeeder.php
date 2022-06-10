<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoryhosting;

class CategoryhostingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoryhosting::create([
            'name' => 'HOSTING',    
            'slug' => 'hosting', 
            'image' => 'public/categoryservice/category1.jpg', 
            'description' => 'hosting de paginas web', 
            'state' => 1,          
            'user_id'=> 1
        ]);
    }
}
