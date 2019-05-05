<?php

use Illuminate\Database\Seeder;
use Proyecto\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "admin";
        $role->description = "Adiministrador";
        $role->save();

        $role = new Role();
        $role->name = "user";
        $role->description = "Usuario";
        $role->save();
    }
}
