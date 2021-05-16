<?php

namespace Database\Seeders;

use App\Models\User;
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

        $role1 = Role::create(['name' =>'admin']);

        $role2 = Role::create(['name' =>'mentor']);

        $role3 = Role::create(['name' =>'mentee']);

        $admin = User::create([
            'name' => 'Admin Ajarin.id',
            'email' => 'admin@ajarin.id',
            'password' => bcrypt('Ajarinid123'),
            'role' => 'admin'
        ]);

        $admin->assignRole('admin');

    }
}
