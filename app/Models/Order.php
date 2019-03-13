<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const PAYMENT_COD = 1;
    const PAYMENT_DIRECT = 2;

    const ORDER = 0;
    const PAID = 1;
    const CANCEL = 2;

    protected $table = 'customer';
    protected $fillable   = [
        'id','time','shipping_price','total','notes_transport','notes_customer','payment','status','reason_cancel','created_at','updated_at'
    ];

}
