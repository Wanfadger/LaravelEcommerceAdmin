<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];


    public function user()
    {
        return $this->hasOne('App\models\User');
    }

    public function subCategories()
    {
        return $this->hasMany('App\models\SubCategory');
    }

}
