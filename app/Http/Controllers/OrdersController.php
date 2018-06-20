<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Products;
use App\Promoters;

class OrdersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //Inclusão do middleware para so acessar usuarios autenticados

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $orders = orders::with(['promoters', 'products'])->get();

        return view('orders.index')->with(compact('orders'));
    }

    public function show($ordersId)
    {
        $orders = orders::find($ordersId)->products()->orderBy('productsID')->withPivot(['o_quantity', 'o_priceBegin', 'o_priceEnd'])->get();

        return view('orders.show')->with(compact('orders'));
    }
}
