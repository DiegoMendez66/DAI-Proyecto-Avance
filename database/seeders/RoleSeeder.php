<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $role1 = Role::create('name' => 'Admin');
        $role2 = Role::create('name' => 'Cliente');

        Permission::create(['name' => 'dashboard']);
        Permission::create(['name' => 'pelicula.index']);
        Permission::create(['name' => 'pelicula.create']);
        Permission::create(['name' => 'pelicula.edit']);
        Permission::create(['name' => 'pelicula.destroy']);
    }
}
