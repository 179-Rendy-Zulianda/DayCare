<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Candice Kids',
            'username' => 'admin',
            'email' => 'admin@candicekids.com',
            'phone' => '081234567890',
            'address' => 'Jl. Admin No. 1, Jakarta',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        $this->command->info('Admin user created successfully!');
        $this->command->info('Email: admin@candicekids.com');
        $this->command->info('Password: admin123');
    }
}
