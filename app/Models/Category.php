<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title'
    ];

    protected $table = 'categories';

    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
