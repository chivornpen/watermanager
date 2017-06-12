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
        $role_superuser= new Role();
        $role_superuser->name = 'superuser';
        $role_superuser->displayName = 'Superuser';
        $role_superuser->save();

        $role_admin= new Role();
        $role_admin->name = 'adminitrator';
        $role_admin->displayName = 'Admin';
        $role_admin->save();
    }
}
