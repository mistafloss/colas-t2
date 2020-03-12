<?php

use Illuminate\Database\Seeder;
use App\RoleUser;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleUser = new RoleUser();
        $roleUser->role_id = 1;
        $roleUser->user_id = 2;
        $roleUser->save();

        $roleUser = new RoleUser();
        $roleUser->role_id = 1;
        $roleUser->user_id = 1;
        $roleUser->save();
        
        
    }
}
