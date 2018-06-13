<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Orders_Products_Promotors extends Model
{
    use SoftDeletes;

    protected $table = 'orders_products_promotors';


}
