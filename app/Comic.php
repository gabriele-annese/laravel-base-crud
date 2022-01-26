<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type',
        'thumb',
        'sale_date',
        'price',
        'series',
    ];
}
