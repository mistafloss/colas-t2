<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = str_random(10);
        $user->email = str_random(10).'@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();

        $user = new User();
        $user->name = str_random(10);
        $user->email = str_random(10).'@hotmail.co.uk';
        $user->password = bcrypt('another-secret');
        $user->save();
    }
}
