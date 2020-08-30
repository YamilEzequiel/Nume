<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Boxe extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id_user',
        'id_sale_position',
        'date_opening',
        'date_closed',
        'status',
        'pile_initial',
        'pile_final_system',
        'pile_final_user',
    ];
}
