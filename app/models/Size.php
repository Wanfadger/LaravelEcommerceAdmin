<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\models\User', 'foreign_key', 'other_key');
    }

    public function products()
    {
        return $this->belongsToMany('App\models\Products');
    }

}
