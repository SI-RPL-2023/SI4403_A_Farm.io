<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Guru;
use App\Models\Event;
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
        User::create([
            'name' => 'pelajar',
            'email' => 'pelajar@gmail.com',
            'username' => 'pelajar',
            'role' => 'pelajar',
            'password' => bcrypt('123123123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Event::create([
            'judul' => 'Pentingnya penggunaan teknologi dalam perternakan',
            'image' => '1.jpg',
            'deskripsi' => 'Menambahan wawasan mengenai pentingnya menggunakan teknologi 
            pada peternakan untuk memudahkan peternak',
            'tipe_event' => 'Virtual Event',
            'tanggal' => '2023-01-21',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Event::create([
            'judul' => 'Farm Tour',
            'image' => 'farmtour.png',
            'deskripsi' => 'Mengenalkan situasi dan kondisi peternakan kepada masyarakat awam',
            'tipe_event' => 'Di kebun pak Dadan',
            'tanggal' => '2023-05-21',
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
