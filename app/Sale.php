<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id_box',
        'total_sale',
        'status',
        'date_and_time_opening',
        'date_and_time_closed',
    ];
}
