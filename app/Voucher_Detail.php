<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher_Detail extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id_voucher',
        'id_article',
        'quantity',
        'subtotal',
        'iva',
        'discount',
        'total',
    ];
}
