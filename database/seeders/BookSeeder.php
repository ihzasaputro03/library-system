<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'judul' => 'Laravel untuk Pemula',
            'penulis' => 'Budi Santoso',
            'tahun_terbit' => 2024,
            'stok' => 1,
        ]);

        Book::create([
            'judul' => 'Pemrograman PHP',
            'penulis' => 'Siti Rahma',
            'tahun_terbit' => 2023,
            'stok' => 1,
        ]);

        Book::create([
            'judul' => 'Basis Data',
            'penulis' => 'Eko Prasetyo',
            'tahun_terbit' => 2022,
            'stok' => 1,
        ]);

        Book::create([
            'judul' => 'Algoritma dan Pemrograman',
            'penulis' => 'Andi Wijaya',
            'tahun_terbit' => 2021,
            'stok' => 1,
        ]);

        Book::create([
            'judul' => 'Pemrograman Berorientasi Objek',
            'penulis' => 'Dewi Lestari',
            'tahun_terbit' => 2025,
            'stok' => 1,
        ]);
    }
}
