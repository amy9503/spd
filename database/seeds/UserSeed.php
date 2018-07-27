<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Admin
        $admin = new User;
        $admin->name = 'Admin';
        $admin->icno = '01';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('123');
        $admin->save(); 

        //user
        $user = new User;
        $user->name = 'User';
        $user->icno = '02';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('123');
        $user->save(); 
    }
}
