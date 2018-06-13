<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Orders;
use App\Products;
use App\Promoters;
use App\Orders_Products_Promotors;

class OrdersController extends Controller
{
   
    public function getIndex()
    {
       

        $orders = orders::with(['promoters','products'])->get();
        
        return view('index')->with(compact('orders'));


    }


    public function getView($ordersId)
    {
          
        $orders = orders::find($ordersId)->products()->orderBy('productsID')->withPivot(['o_quantity','o_priceBegin','o_priceEnd'])->get();

        return view('view')->with(compact('orders'));
    }
}
