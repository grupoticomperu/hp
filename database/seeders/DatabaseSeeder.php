<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UserSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TagSeeder::class);
        
        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
