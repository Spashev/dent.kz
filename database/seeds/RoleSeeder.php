<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create role
        $role = Role::create(['name' => 'admin']);

        // create permissions
        $permission = Permission::create(['name' => 'all privileges']);
        
        $role->givePermissionTo($permission);
        $permission->assignRole($role);
    }
}
