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
            'name' => 'ahmad',
            'email' => 'ahmad@gmail.com',
            'username' => 'ahmad123',
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
            'name' => 'Dani',
            'email' => 'Dani@gmail.com',
            'username' => 'Dani123',
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