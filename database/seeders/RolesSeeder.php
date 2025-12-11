<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['super_admin', 'admin', 'usuario'];

        foreach ($roles as $role) {
            Role::create(['role' => $role]);
        }
    }
}

