<?php

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count()) {
            return;
        }
        
        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->display_name = 'User'; // optional
        $role_user->description = 'User is allowed to connect'; // optional
        $role_user->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->display_name = 'Administrator'; // optional
        $role_admin->description = 'User is allowed to manage the contents'; // optional
        $role_admin->save();

        $user = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Account',
            'email' => 'admin@devfactory.ch',
            'password' => bcrypt('admin'),
        ]);

        $user->attachRole($role_admin);

        $user = User::create([
            'first_name' => 'Greg',
            'last_name' => 'Marineau',
            'email' => 'greg@devfactory.ch',
            'password' => bcrypt('user'),
        ]);

        $user->attachRole($role_user);
    }
}
