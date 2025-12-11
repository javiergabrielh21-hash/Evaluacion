<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}

use App\Models\User;
use Illuminate\Support\Facades\Hash;

public function run()
{
    User::create([
        'name' => 'sa',
        'email' => 'sa@example.com',
        'password' => Hash::make('12345678'),
        'role_id' => 1, // super_admin
    ]);
}
