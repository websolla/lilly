<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $guarded = [];


    public function getTitleAttribute() // This Accessories Is Working is get The { title } in this model and decode it
    {
        return json_decode($this->attributes['title'], true);
    }

}
