<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articles_Price extends Model
{
    use SoftDeletes;

    protected $dates = ['deletet_at'];

    protected $fillable = [
        'id_article',
        'precio_cost',
        'precio_special_1',
        'precio_special_2',
        'precio_sale',
    ];
}
