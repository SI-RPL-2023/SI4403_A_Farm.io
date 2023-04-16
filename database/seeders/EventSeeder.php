<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
