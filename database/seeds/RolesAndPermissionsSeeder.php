<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'user_management_access']);
        Permission::create(['name' => 'user_access']);
        Permission::create(['name' => 'user_create']);
        Permission::create(['name' => 'user_show']);
        Permission::create(['name' => 'user_update']);
        Permission::create(['name' => 'user_delete']);


        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo('user_access');

        // or may be done by chaining
        $role = Role::create(['name' => 'manager'])
            ->givePermissionTo(
                [
                    'user_management_access',
                    'user_access',
                    'user_show',
                ]
            );
        $role = Role::create(['name' => 'super_admin']);
        $role->givePermissionTo(Permission::all());

        $superadmin = User::find(1);
        $superadmin->assignRole('super_admin');

        $user = User::find(3);
        $user->assignRole('user');
    }
}
