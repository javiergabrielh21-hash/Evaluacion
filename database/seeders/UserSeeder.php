<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $role = Role::where('role', 'super_admin')->first();

        User::create([
            'name' => 'sa',
            'email' => 'sa@example.com',
            'password' => Hash::make('12345678'),
            'role_id' => $role->id
        ]);
    }
}
