<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'tag1'    
        ]);

        Tag::create([
            'name' => 'tag2'    
        ]);

        Tag::create([
            'name' => 'tag3'    
        ]);

        Tag::create([
            'name' => 'tag4'    
        ]);

    }
}
