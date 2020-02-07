<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function colors()
    {
        return $this->belongsToMany('App\models\Color');
    }

    public function sizes()
    {
        return $this->belongsToMany('App\models\Size');
    }

    public function subCategory()
    {
        return $this->belongsTo('App\models\SubCategory');
    }

}
