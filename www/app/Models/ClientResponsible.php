<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientResponsible extends Model
{

    protected $table = "client_responsibles";

    protected $primaryKey = "id";

    protected $fillable = [
        'response_contact',
        'tel_response',
        'email_response',
        'id_client',
        
        
    ];
    use HasFactory;
}
