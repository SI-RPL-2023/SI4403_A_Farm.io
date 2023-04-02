<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Guru;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'darto',
            'email' => 'darto@gmail.com',
            'username' => 'darto123',
            'password' => bcrypt('123123123'),
            'role' => 'guru',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        User::create([
            'name' => 'gagan',
            'email' => 'gagan@gmail.com',
            'username' => 'gagan123',
            'password' => bcrypt('123123123'),
            'role' => 'guru',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Guru::create([
            'name' => 'darto',
            'email' => 'darto@gmail.com',
            'username' => 'darto123',
            'password' => bcrypt('123123123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Guru::create([
            'name' => 'gagan',
            'email' => 'gagan@gmail.com',
            'username' => 'gagan123',
            'password' => bcrypt('123123123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
