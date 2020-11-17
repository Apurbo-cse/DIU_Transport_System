<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus_Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
    ];
    public function stuff()
    {
        return $this->hasMany(Stuff::class);
    }
}
