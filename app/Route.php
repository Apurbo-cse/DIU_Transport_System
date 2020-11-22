<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
      'route_name',
      'route_description',
      'status',
    ];

    public function stuff()
    {
        return $this->hasMany(Stuff::class);
    }
    public function bus()
    {
        return $this->hasMany(Bus::class);
    }
}
