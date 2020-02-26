<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';  

    protected $fillable = [
    'user_id',
    'catgory_id',
    'name_fa',
    'name_en',
    'color_id',
    'internalMemory',
    'network',
    'ram',
    'front_camera',
    'back_camera',
    'replace_battry',
    'screanSize',
    'simNumber',
    'imageUrl',
    'price',
    'count',
    'discount',
    'status',
     'best',
     'body',
     'code'
];

    public function category()
    {
        return $this->belongsToMany(Cat::class);
    }
}
