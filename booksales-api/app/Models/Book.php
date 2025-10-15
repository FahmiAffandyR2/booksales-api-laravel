<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya',
            'price' => 40000,
            'stock' => 15,
            'cover-photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ],
        [
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang',
            'price' => 25000,
            'stock' => 5,
            'cover-photo' => 'sebuah_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ],
        [
            'title' => 'Naruto',
            'description' => 'Buku yang membahas tentang jalan ninja seseorang',
            'price' => 30000,
            'stock' => 55,
            'cover-photo' => 'Naruto.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ],
        [
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah inspiratif perjuangan anak-anak Belitung dalam meraih mimpi',
            'price' => 50000,
            'stock' => 20,
            'cover-photo' => 'laskar-pelangi.jpg',
            'genre_id' => 4,
            'author_id' => 4
        ],
        [
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'description' => 'Perjalanan Harry Potter di dunia sihir Hogwarts',
            'price' => 60000,
            'stock' => 10,
            'cover-photo' => 'harry-potter.jpg',
            'genre_id' => 5,
            'author_id' => 5
        ],
        [
            'title' => 'Perahu Kertas',
            'description' => 'Cerita cinta dan perjalanan hidup Kugy dan Keenan',
            'price' => 45000,
            'stock' => 18,
            'cover-photo' => 'perahu-kertas.jpg',
            'genre_id' => 6,
            'author_id' => 6
        ],
        [
            'title' => 'It',
            'description' => 'Novel horor tentang makhluk misterius yang meneror sebuah kota kecil',
            'price' => 65000,
            'stock' => 8,
            'cover-photo' => 'it.jpg',
            'genre_id' => 7,
            'author_id' => 7
        ],
    ];
    public function getBooks(){
        return $this->books;
    }

}
