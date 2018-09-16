<?php


namespace App\Http\Controllers\Site;


use App\Order;
use App\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends BaseController
{
    public function index(Request $request){
        $cart = $request->session()->get('cart', null);

        if ($cart == null) redirect('cart');

        return view('site.checkout');
    }

    public function order(Request $request){
        $cart = $request->session()->get('cart', null);

        if ($cart == null) redirect('cart');

        $userId = $request->session()->get('userId');

        $orderDate = date('Y-m-d');

        $input['userId'] = $userId;
        $input['orderDate'] = $orderDate;
        $input['orderStatus'] = 1;

        Order::create($input);

        //get last order record
        $lastOrder = DB::table('order')->orderBy('id', 'desc')->first();

        foreach ($cart as $key => $value){
            $input['orderId'] = $lastOrder->id;
            $input['productId'] = $key;
            $input['detailQuantity'] = $value;

            Orderdetail::create($input);
        }

        $request->session()->put('cart', null);

        return redirect('finish');

    }

    public function finish(){

        return view('site.finish');
    }

}