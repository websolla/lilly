<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $guarded = [];


    public function getAreaAttribute() // This Accessories Is Working is get The { title } in this model and decode it
    {
        return json_decode($this->attributes['area'], true);
    }
}
