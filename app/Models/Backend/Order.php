<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'shipping_address',
        'division_id',
        'district_id',
        'zip_code',
        'addional_message',
        'product_finalprice',
        'pricewithcoupon',
        'is_paid',
        'payment_id',
        'transaction_id',
    ];
}