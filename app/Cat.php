<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
        'title_fa','title_en'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
