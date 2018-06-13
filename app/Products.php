<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    protected $table = 'products';

    protected $primaryKey = 'productsId';

    /**
     * Function to get category data of each product through foreign key
     * and using eloquent belongsTo method
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */


}
