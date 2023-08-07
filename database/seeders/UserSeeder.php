<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'username' => 'superadmin',
            'password' => Hash::make('superadmin'),
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        User::factory()->create([
            'name' => 'Pimpinan',
            'email' => 'pimpinan@gmail.com',
            'email_verified_at' => now(),
            'role' => 'pimpinan',
            'username' => 'pimpinan',
            'password' => Hash::make('pimpinan'),
        ]);

        User::factory()->create([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'email_verified_at' => now(),
            'role' => 'manager',
            'username' => 'manager',
            'password' => Hash::make('manager'),
        ]);

        User::factory()->create([
            'name' => 'Angbar',
            'email' => 'angbar@gmail.com',
            'email_verified_at' => now(),
            'role' => 'angbar',
            'username' => 'angbar',
            'password' => Hash::make('angbar'),
        ]);

        User::factory()->create([
            'name' => 'Angfas',
            'email' => 'angfas@gmail.com',
            'email_verified_at' => now(),
            'role' => 'angfas',
            'username' => 'angfas',
            'password' => Hash::make('angfas'),
        ]);

        User::factory()->create([
            'name' => 'Aset',
            'email' => 'aset@gmail.com',
            'email_verified_at' => now(),
            'role' => 'aset',
            'username' => 'aset',
            'password' => Hash::make('aset'),
        ]);

        User::factory()->create([
            'name' => 'Amalkoding',
            'email' => 'amalkoding@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'username' => 'amalkoding',
            'password' => Hash::make('amalkoding'),
        ]);
    }
}
