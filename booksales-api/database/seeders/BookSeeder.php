<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'id' => 1,
                'title' => 'Pulang',
                'description' => 'Perjalanan hidup seorang pemuda bernama Bujang mencari arti pulang yang sebenarnya.',
                'price' => 85000,
                'stock' => 20,
                'cover_photo' => 'pulang.jpg',
                'author_id' => 1, // Tere Liye
                'genre_id' => 1   // Drama / Fiksi
            ],
            [
                'id' => 2,
                'title' => 'Laskar Pelangi',
                'description' => 'Kisah inspiratif perjuangan 10 anak dari Belitung untuk meraih pendidikan.',
                'price' => 90000,
                'stock' => 18,
                'cover_photo' => 'laskar-pelangi.jpg',
                'author_id' => 2, // Andrea Hirata
                'genre_id' => 2   // Inspiratif
            ],
            [
                'id' => 3,
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'description' => 'Petualangan pertama Harry Potter di sekolah sihir Hogwarts.',
                'price' => 120000,
                'stock' => 25,
                'cover_photo' => 'harry-potter-1.jpg',
                'author_id' => 3, // J.K. Rowling
                'genre_id' => 3   // Fantasy
            ],
            [
                'id' => 4,
                'title' => 'Supernova: Kesatria, Putri, dan Bintang Jatuh',
                'description' => 'Novel filsafat, cinta, dan pencarian jati diri dengan narasi yang mendalam.',
                'price' => 95000,
                'stock' => 15,
                'cover_photo' => 'supernova.jpg',
                'author_id' => 4, // Dewi Lestari
                'genre_id' => 3  // Fiksi Ilmiah
            ],
            [
                'id' => 5,
                'title' => 'The Shining',
                'description' => 'Kisah misteri psikologis yang terjadi di hotel terpencil Overlook Hotel.',
                'price' => 110000,
                'stock' => 12,
                'cover_photo' => 'the-shining.jpg',
                'author_id' => 5, // Stephen King
                'genre_id' => 3   // Horor
            ],
        ]);
    }
}
