<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'title' => 'Blog', 
            'image' => 'public/blog/blog1.jpg', 
            'description' => 'blog de páginas web', 
            'keywords' => 'blog creacion de paginas web', 
            'user_id'=> 1
        ]);
        
    }
}
