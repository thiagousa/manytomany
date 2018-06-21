<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdersProducts extends Model
{
    use SoftDeletes;

    protected $table = 'orders_products';
}
