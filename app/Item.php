<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'description',
        'model',
        'price',
        'group_size',
        'image_path'
    ];
}
