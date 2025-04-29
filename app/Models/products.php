<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'stoke',
        'categories_id',
        'image',
    ];
}
