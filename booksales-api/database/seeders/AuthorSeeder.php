<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name' => 'Tere Liye',
                'bio' => 'Seorang penulis produktif Indonesia yang dikenal dengan karya-karya bergenre drama dan inspirasi kehidupan.',
                'photo' => 'tere-liye.jpg'
            ],
            [
                'name' => 'Andrea Hirata',
                'bio' => 'Penulis novel sastra terkenal asal Belitung, pencipta karya fenomenal Laskar Pelangi.',
                'photo' => 'andrea-hirata.jpg'
            ],
            [
                'name' => 'J.K. Rowling',
                'bio' => 'Penulis asal Inggris yang mendunia dengan seri Harry Potter.',
                'photo' => 'jk-rowling.jpg'
            ],
            [
                'name' => 'Dewi Lestari',
                'bio' => 'Penulis dan penyanyi Indonesia, dikenal lewat seri novel Supernova.',
                'photo' => 'dewi-lestari.jpg'
            ],
            [
                'name' => 'Stephen King',
                'bio' => 'Penulis legendaris asal Amerika Serikat, spesialis cerita horor dan misteri.',
                'photo' => 'stephen-king.jpg'
            ],
        ]);
    }
}
