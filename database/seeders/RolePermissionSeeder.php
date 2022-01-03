<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Roles

        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleEditor = Role::create(['name' => 'editor']);
        $roleUser = Role::create(['name' => 'user']);

        // Create Permission as a array
        $permissions = [
            // blog permission 
            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.remove',
            'blog.approve',

            // Admin permission 
            'admin.create',
            'admin.view',
            'admin.edit',
            'admin.remove',
            'admin.approve',

            // Role permission 
            'role.create',
            'role.view',
            'role.edit',
            'role.remove',
            'role.approve',

            // profile permission 
            'user.view',
            'user.edit',
        ];

        // Assign and create Permission name
       // $permission = Permission::create(['name' => 'edit articles']);
       for ($i = 0; $i < count($permissions); $i++) {
        // Create Permission
        $permission = Permission::create(['name' => $permissions[$i]]);
        $roleSuperAdmin->givePermissionTo($permission);
        $permission->assignRole($roleSuperAdmin);
    }

    }
}
