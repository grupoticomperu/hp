<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
//importamos para asignar roles y permisos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permission::truncate();
        //Role::truncate();
        //User::truncate();
        

       $adminRole = Role::create(['name'=>'Admin']);
       $writerRole = Role::create(['name'=>'Writer']);

       
        $viewPostsPermission = Permission::create(['name'=>'view Post']);
        $createPostsPermission = Permission::create(['name'=>'create Post']);
        $updatePostsPermission = Permission::create(['name'=>'update Post']);
        $deletePostsPermission = Permission::create(['name'=>'delete Post']);
       

        $admin = new User;
        $admin->name = 'Michael';
        $admin->email = 'michael@ticomperu.com';
        $admin->password = '$2y$10$8MtRuCQn1tUeClYvMy8VseUKp0ga9IB8V0pGqugxoiR2OyEp8iOnm';
        $admin->save();

        $admin->assignRole($adminRole);


        $writer = new User;
        $writer->name = 'pepe';
        $writer->email = 'pepe@ticomperu.com';
        $writer->password = bcrypt('12345678');
        $writer->save();

        $writer->assignRole($writerRole);

/*
        User::create([
            'name' => 'Michael Cabello Alvino',
            'email' => 'michael@ticomperu.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'pepe cabello',
            'email' => 'pepe@ticomperu.com',
            'password' => bcrypt('12345678')
        ]);
*/

    }
}
