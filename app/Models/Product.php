<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $hidden = ['updated_at'];

    protected $table = 'products';

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->diffForHumans([
            'parts' => 2,
        ]);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
