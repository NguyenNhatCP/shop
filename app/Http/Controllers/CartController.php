<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Products_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function getAddToCart(Request $request,$id)
    {
        $product = Products_model::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart-> add($product,$product->id);
        $request -> session()->put('cart',$cart);
        return back();
    }
    public function deleteItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart-> removeItem($id);
        Session::put('cart', $cart);
        return back();
    }
    public function ReduceOneItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart', $cart);
        return back();
    }
    public function IncreaseOneItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($id);
        Session::put('cart', $cart);
        return back();
    }
    public function getCart()
    {
        if(!Session::has('cart')){
            return view('frontEnd.cart',['products'=> null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('frontEnd.cart',['products'=> $cart->items,'totalPrice'=>$cart->totalPrice]);
    }
}
