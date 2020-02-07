<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $guarded = [];

    public function Category()
    {
        return $this->belongsTo('App\model\Category');
    }

    public function products()
    {
        return $this->hasMany('App\models\Product');
    }

}
