<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Products;
use App\Promoters;

class OrdersController extends Controller
{
    public function getIndex()
    {
        $orders = orders::with(['promoters', 'products'])->get();

        return view('index')->with(compact('orders'));
    }

    public function getView($ordersId)
    {
        $orders = orders::find($ordersId)->products()->orderBy('productsID')->withPivot(['o_quantity', 'o_priceBegin', 'o_priceEnd'])->get();

        return view('view')->with(compact('orders'));
    }
}
