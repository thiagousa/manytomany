<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promoters extends Model
{
    use SoftDeletes;

    protected $table = 'promoters';

    protected $primaryKey = 'promotersId';



}
