<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use SoftDeletes;

    protected $table = 'orders';

    protected $primaryKey = 'ordersId';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function products(){

        return $this->belongsToMany('App\Products','orders_products_promotors','ordersId','productsId');


    }

    public function promoters()
    {
        return $this->belongsTo('App\Promoters', 'promotersId', 'promotersId');
    }


   public function orders_products_promotors (){

       return $this->belongsToMany('App\orders_products_promotors')->withPivot('o_priceBegin', 'o_priceEnd','o_quantity');

   }



    /**
     * Function to get product data through foreign key
     * and using eloquent belongsTo method
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

}
