<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'read-user']);
        Permission::create(['name' => 'update-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name' => 'create-']);


        Role::create(['name' => 'admin'])->givePermissionTo([
            'create-user',
            'read-user',
            'update-user',
            'delete-user',
        ]);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('create-user');
        $roleAdmin->givePermissionTo('read-user');
        $roleAdmin->givePermissionTo('update-user');
        $roleAdmin->givePermissionTo('delete-user');
    }
}