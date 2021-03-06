<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id_voucher_creation_reason',
        'id_associated',
        'total',
        'original',
        'number_copy',
        'date',
    ];
}
