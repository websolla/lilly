<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $guarded = [];

    public function getTitleAttribute()// To Get Back My My Title Decoded
    {
        return json_decode($this->attributes['title'], true);
    }

    public function getDescriptionAttribute() // To Get Back My My description Decoded
    {
        return json_decode($this->attributes['description'], true);
    }
}
