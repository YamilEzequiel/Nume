<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articles_Provider extends Model
{

    Use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id_article',
        'id_provider',
        'id_company',
    ];
}
