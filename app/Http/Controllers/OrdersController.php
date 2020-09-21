<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Orders_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    public function submitcheckout(Request $request){
        if(!Session:: has('cart'))
        {
            return redirect()->route('shopping-cart');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        $order = new Order();            
        $order->users_id = Auth::user()->id;
        $order->users_email = Auth::user()->email;
        $order->cart = serialize($cart);
        $order->address = $request->input('billing_address');
        $order->name = $request->input('billing_name');
        $order->mobile = $request->input('billing_mobile');
        $order->save();
        Session:: forget('cart');
        Session::flash('message','Successfully purchased product');
        return redirect()->route('myOrder');
    }
}
