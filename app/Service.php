<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'status',
        'image',
    ];
}
