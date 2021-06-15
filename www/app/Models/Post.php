<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    protected $table = "posts";

    protected $primaryKey = "id";

    protected $fillable = [
        'title',
        'summary',
        'desc',
        'category',
        'author',
        'date_post',
        'img',
    ];


    use HasFactory;
}
