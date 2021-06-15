<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portifolio extends Model
{

    use HasFactory;

    protected $table = "portifolios";

    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'category_id',
        'client_id',
        'desc',
        'img',
        'date_portifolio',
        'url',
        'logo',
        'destaque',



    ];

    public function getPresenterAttribute()
    {
        # code...
        return new PortfolioPresenter($this);
    }

    public function client()
    {
        # code...
        return $this->belongsTo(Portifolio::class, 'client_id');
    }
}
