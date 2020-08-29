<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher_Creation_Reason extends Model
{
    use SoftDeletes;

    protected $dates = ['deletet_at'];

    protected $fillable = [
        'title',
        'active_account',
        'active_stock',
        'flow',
        'voucher_lyrics',
        'voucher_title',
    ];
}
