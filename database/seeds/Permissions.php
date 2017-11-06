<?php

use Illuminate\Database\Seeder;
use \Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;


class Permissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Administrator']);
        $viewer = Role::create(['name' => 'Viewer']);
        Role::create(['name' => 'Point']);
        Permission::create(['name' => 'admin_users']);
        Permission::create(['name' => 'update']);

        $admin->givePermissionTo('admin_users');
        $admin->givePermissionTo('update');
        $viewer->givePermissionTo('admin_users');

        $user = User::create([
            'name' => 'Juan Ramos',
            'email' => 'juan2ramos@gmail.com',
            'password' => bcrypt('secret')
        ]);

        $user->assignRole('Administrator');
    }
}
