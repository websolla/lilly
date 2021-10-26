<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    protected $guarded = [];

    public function getTitleAttribute()
    {
        return json_decode($this->attributes['title'], true);
    }

    public function getTextAttribute()
    {
        return json_decode($this->attributes['text'], true);
    }
    
    public function getDescriptionAttribute()
    {
        return json_decode($this->attributes['description'], true);
    }


    public function category()
    {
         return $this->hasOne(Category::class, 'id', 'cat');
    }
}
