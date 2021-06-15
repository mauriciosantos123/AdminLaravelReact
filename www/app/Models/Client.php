<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\SupportsPartialRelations;

class Client extends Model
{
    use HasFactory;
    protected $table = "clients";

    protected $primaryKey = "id";

    protected $fillable = [
        'name_fantasy',
        'company_name',
        'cnpj',
        'state_register',
        'city',
        'state',
        'tel',  
        'response_contact',  
        'tel_response',  
        'email_response',  
        'email',  
        'active',  
    ];
    
    

    public function getPresenterAttribute()
    {
        # code...
        return new ClientPresenter($this);
    }

   

    public function portfolio()
    {
        # code...
        // return $this->hasOneThrough(Portifolio::class,Client::class,'client_id','id');
        return $this->belongsTo(Portifolio::class,'id','client_id'); //belongTO = Pertence á:
    }

    public function manutence_service(){
        return $this->hasMany('App\Manutence_service'); //hasMany = Tem muitos 
    }
}
