<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'chapter_name', 
        'chapter_version',
        'chapter_content',
        'book_id',
        'total_chapters',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class)->onDelete('cascade');
    }
}
