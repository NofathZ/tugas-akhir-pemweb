<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permission1 = Permission::create(['name' => 'admin-access']);
        
        $role1 = Role::create(['name' =>'admin']);

        $role2 = Role::create(['name' =>'mentor']);

        $role3 = Role::create(['name' =>'mentee']);

        $role1->givePermissionTo($permission1);

    }
}
