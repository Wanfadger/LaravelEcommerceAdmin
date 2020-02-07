<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\models\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\models\Products');
    }

}
