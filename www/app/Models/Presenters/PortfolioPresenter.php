<?php

namespace App\Models;

use App\Presenters\AbstractPresenter;
use Illuminate\Database\Eloquent\Model;

class PortfolioPresenter extends AbstractPresenter 
{
 protected $portfolio ;

 public function __construct(Model $model)
 {
     # code...
     $this->portfolio = $model;


 }

 
    public function logo()
    {
        # code...
        return $this->portfolio->logo;

    }
}
