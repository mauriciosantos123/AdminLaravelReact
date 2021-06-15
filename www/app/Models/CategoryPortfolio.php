<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPortfolio extends Model
{

    protected $table = "category_portfolios";

    protected $primaryKey = "id";

    protected $fillable = [
        'name',        
    ];
    use HasFactory;
}
