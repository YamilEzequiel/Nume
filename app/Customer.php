<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    Use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id_company',
        'firstname',
        'lastname',
        'dni',
    ];
}
