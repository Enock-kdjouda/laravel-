<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable =[
      'title',
      'authors_id',
      'isbn',
      'published_year',
    ];

    // public function author()
    // {
    //     return $this->belongsTo(Author::class);
    // }
    public function author()
{
    return $this->belongsTo(Author::class, 'authors_id');
}
}
