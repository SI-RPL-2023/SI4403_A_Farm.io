<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Guru;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
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
    }
}