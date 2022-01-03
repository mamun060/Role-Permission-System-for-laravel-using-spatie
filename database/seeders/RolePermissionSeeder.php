<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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

        // Create Permission as a array
        $permission = [
            // blog
            'blog.create',
            'blog.edit',
            'blog.remove',
            'blog.approve',
        ];

        // Assign Permission

    }
}
