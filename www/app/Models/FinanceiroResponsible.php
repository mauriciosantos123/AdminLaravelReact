<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceiroResponsible extends Model
{

    protected $table = "financeiro_responsibles";

    protected $primaryKey = "id";

    protected $fillable = [
        'response_finance',
        'tel_finance',
        'email_finance',
        'id_client',
    ];
    use HasFactory;
}
