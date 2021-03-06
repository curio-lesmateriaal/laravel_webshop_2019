<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'categories_id'];

    // hasOne
    // hasMany
    // belongsTo
    // belongsToMany

    public function category() {
        return $this->belongsTo('\App\Category', 'categories_id');
    }

}
