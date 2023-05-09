<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class ConfigadminrolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Roles del Sistema
        $admin = Role::create(['name' => 'Administrador']); //Administrador del Sistema 

        //permisos
        Permission::create(['name' => 'menuAdmin'])->syncRoles([$admin]);

        //usuario
        User::create([
            'name' => 'Oliver Gomez',
            'email' => 'kayserenrique@gmail.com',
            'password' => bcrypt('123456789'),
        ])->assignRole('Administrador');

    }
}
