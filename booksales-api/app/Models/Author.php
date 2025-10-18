<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
   protected $table = 'authors';

   protected $fillable = ['name', 'bio', 'photo'];
}
 // public function getAuthors()
    // {
    //     return [
    //         ['id' => 1, 'name' => 'Tere Liye'],
    //         ['id' => 2, 'name' => 'Andrea Hirata'],
    //         ['id' => 3, 'name' => 'J.K. Rowling'],
    //         ['id' => 4, 'name' => 'Dewi Lestari'],
    //         ['id' => 5, 'name' => 'Stephen King'],
    //     ];
    // }