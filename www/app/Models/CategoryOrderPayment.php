<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryOrderPayment extends Model
{
    use HasFactory;

    protected $table = "category_order_payments";

    protected $primaryKey = "id";

    protected $fillable = [
        'name',        
    ];

}

