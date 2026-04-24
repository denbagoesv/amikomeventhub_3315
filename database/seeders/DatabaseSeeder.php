<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin Utama
        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert Kategori Event
        $cat1 = \App\Models\Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $cat2 = \App\Models\Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        $cat3 = \App\Models\Category::create([
            'name' => 'Olahraga',
            'slug' => 'olahraga',
        ]);

        // 3. Insert 6 Event
        \App\Models\Event::create([
            'category_id' => $cat1->id,
            'title' => 'AI & Future Tech Summit 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan bersama para ahli.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 75000,
            'stock' => 150,
            'poster_path' => 'posters/event-1.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $cat1->id,
            'title' => 'Hackathon - Unleash Your Inner Developer',
            'description' => 'Asah skill coding kamu dan ciptakan solusi inovatif.',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $cat1->id,
            'title' => 'UI/UX Masterclass 2026',
            'description' => 'Pelajari teknik desain UI/UX modern dari praktisi berpengalaman.',
            'date' => '2026-05-15 09:00:00',
            'location' => 'Gedung Unit 2 Amikom',
            'price' => 60000,
            'stock' => 80,
            'poster_path' => 'posters/event-3.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $cat2->id,
            'title' => 'Jazz Night 2026',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 200,
            'poster_path' => 'posters/event-4.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $cat2->id,
            'title' => 'Stand Up Comedy Night',
            'description' => 'Malam penuh tawa bersama komika-komika terbaik Yogyakarta.',
            'date' => '2026-05-20 19:30:00',
            'location' => 'Auditorium Amikom',
            'price' => 45000,
            'stock' => 120,
            'poster_path' => 'posters/event-5.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $cat3->id,
            'title' => 'E-Sport U-Champ Tournament',
            'description' => 'Kompetisi e-sport antar mahasiswa se-Yogyakarta.',
            'date' => '2026-06-01 08:00:00',
            'location' => 'Lab Komputer Amikom',
            'price' => 30000,
            'stock' => 64,
            'poster_path' => 'posters/event-6.png',
        ]);
    }
}