<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryservice extends Model
{
    protected $table = "category_services";

    protected $primaryKey = "id";

    protected $fillable = [
        'name',        
    ];
    use HasFactory;
}
