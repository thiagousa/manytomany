<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersProductsPromotors extends Model
{
    use SoftDeletes;

    protected $table = 'orders_products_promotors';
}
