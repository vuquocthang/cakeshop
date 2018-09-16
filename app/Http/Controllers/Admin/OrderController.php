<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index(){
        $orders = Order::all();

        return view('admin.order.index', ['orders' => $orders]);
    }

    public function status(Request $request){

        $id = $request->id;

        $order = Order::findOrFail($id);

        $order->orderStatus = !$order->orderStatus;

        $order->save();

        return redirect('admin/order/index');
    }
}