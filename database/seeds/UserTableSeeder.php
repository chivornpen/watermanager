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
        $user_superuser = new User;
        $user_superuser->name = 'camsofts';
        $user_superuser->email = 'camsofts@gmail.com';
        $user_superuser->password = bcrypt('camsofts');
        $user_superuser->is_log = 0;
        $user_superuser->userStatus = 0;
        $user_superuser->is_change = 0;
        $user_superuser->role_id = 1;
        $user_superuser->save();

        $user_admin = new User;
        $user_admin->name = 'admin';
        $user_admin->email = 'admin@gmail.com';
        $user_admin->password = bcrypt('admin');
        $user_admin->is_log = 0;
        $user_admin->userStatus = 0;
        $user_admin->is_change = 0;
        $user_admin->role_id = 2;
        $user_admin->save();

    }
}
