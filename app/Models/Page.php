<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
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
}
