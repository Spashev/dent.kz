<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'product_id', 'user_id', 'image_path'
    ];

    protected $table = 'images';
}
