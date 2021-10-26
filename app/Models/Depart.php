<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depart extends Model
{
    protected $guarded = [];


    public function getTitleAttribute() // This Accessories Is Working is get The { title } in this model and decode it
    {
        return json_decode($this->attributes['title'], true);
    }

    public function category()
    {
         return $this->hasMany(Category::class, 'depart', 'id');
    }
}
