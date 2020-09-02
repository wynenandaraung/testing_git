<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class BackendController extends Controller
{
    public function dashboardfun($value='')
    {
    	
    	return view('backend.dashboard');
}

 public function orderlist($value='')
    {
      $orders = Order::all();
      return view('Backend.order.index',compact('orders'));
    }

    public function orderdetail($id)
    {
       $orderdetail = Order::find($id);

       return view('Backend.order.orderdetail',compact('orderdetail'));
    }

}
