<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Book extends Model
{
    use HasFactory;

    public function Bookshelf(): BelongsTo
    {
        return $this->belongTo(Bookshelf::class);
    }
    protected $fillable =[
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'quality',
        'bookshelf_id',
        'cover',
    ];
}
