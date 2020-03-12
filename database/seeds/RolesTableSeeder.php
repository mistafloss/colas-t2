<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'Admin';
        $role->description = 'Lorem ipsum dolor';
        $role->active = 1;
        $role->save();

        $role = new Role();
        $role->name = 'Manager';
        $role->description = 'Lorem ipsum dolor';
        $role->active = 1;
        $role->save();
    }
}
