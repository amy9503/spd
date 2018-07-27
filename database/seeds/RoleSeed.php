<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
use App\User;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        //assign admin user
        $userAdmin = User::where('icno','01')->first(); //select * from users where ic is like -01
        $userAdmin->attachRole($admin);
    }
}
