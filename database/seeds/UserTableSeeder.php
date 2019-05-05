<?php

use Illuminate\Database\Seeder;
use Proyecto\Role;
use Proyecto\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','user')->first();
        $role_admin = Role::where('name','admin')->first();

        $user = new User();
        $user->name = "Administrador";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_admin);
        
        $user = new User();
        $user->name = "Usuario";
        $user->email = "user@gmail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
