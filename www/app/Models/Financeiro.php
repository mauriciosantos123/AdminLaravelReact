<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financeiro extends Model
{

    protected $table = "financeiros";

    protected $primaryKey = "id";

    protected $fillable = [
        'contract_start',
        'contract_end',
        'dt_payment',
        'form_payment',
        'value',
        'readjustment',
        'end_fidelity',
        'early_warning',
        'termination',  
        'client_id',
        'type_payment',

        
    ];
    use HasFactory;
}
