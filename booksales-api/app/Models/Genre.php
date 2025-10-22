<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    protected $fillable = ['name', 'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
// public function getGenres()
    // {
    //     // return [
    //     //     ['id' => 1, 'name' => 'Fantasy'],
    //     //     ['id' => 2, 'name' => 'Romance'],
    //     //     ['id' => 3, 'name' => 'Horror'],
    //     //     ['id' => 4, 'name' => 'Adventure'],
    //     //     ['id' => 5, 'name' => 'Mystery'],
    //     // ];
    // }