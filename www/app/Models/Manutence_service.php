<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutence_service extends Model
{
    use HasFactory;
    protected $table = "manutence_services";

    protected $primaryKey = "id";

    protected $fillable = [
        'order_service',
        'type_service',
        'extra_value',
        'completion_time',
        'dt_start',
        'dt_finish',
        'client_id',  
        'service_id',  
        'approved',  
        'categorypayments_id',  
        
    ];
    
    public function clients(){
        return $this->belongsTo(Client::class,'client_id','id');
    }
    
 
}
