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
        //desabilita la revision de llaves foraneas
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UserSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(HomeservicesTableSeeder::class);
        $this->call(ConfigurationsTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(PagecontactTableSeeder::class);
        $this->call(CategoryservicesTableSeeder::class);
        $this->call(SubcategoryservicesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(CategoryhostingsTableSeeder::class);
        $this->call(SubcategoryhostingsTableSeeder::class);
        $this->call(HostingsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(WhiesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(WorksTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        //habilita la revision de llaves foraneas
        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
