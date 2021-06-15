<?php

namespace App\Models;

use App\Presenters\AbstractPresenter;
use Illuminate\Database\Eloquent\Model;

class ClientPresenter extends AbstractPresenter 
{
 protected $client ;

 public function __construct(Model $model)
 {
     # code...
     $this->client = $model;


 }


}
