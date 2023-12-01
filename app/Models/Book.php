<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'author_id',
        'title',
        'release_date'
    ];

    protected $casts = [
        'release_date' => 'date',
    ];

    public function author()

    {
        return $this->belongsTo(User::class);
    }
}
