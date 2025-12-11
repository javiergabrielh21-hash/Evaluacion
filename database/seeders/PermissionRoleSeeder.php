<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class PermissionRoleSeeder extends Seeder
{
    public function run(): void
    {
        $role = Role::where('role', 'super_admin')->first();
        $permissions = Permission::all()->pluck('id');

        $role->permissions()->sync($permissions);
    }
}

