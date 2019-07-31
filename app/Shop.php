<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = "shops";

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
