<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{

    protected $table = "services";

    protected $primaryKey = "id";

    protected $fillable = [
        'name_sevice',
        'desc',
        'domain',
        'domain_link',
        'category_id',
        'client_id',
   
    ];
    use HasFactory;
}
