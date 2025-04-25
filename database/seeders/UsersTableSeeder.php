<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Customer User',
                'email' => 'customer@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
            ],
            [
                'name' => 'Agent User',
                'email' => 'agent@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'agent',
            ],
            [
                'name' => 'Operator User',
                'email' => 'operator@example.com',
                'password' => Hash::make('12345678'),
                'role' => 'operator',
            ],
        ]);
    }
}
