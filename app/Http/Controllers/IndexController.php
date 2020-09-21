<?php

namespace App\Http\Controllers;

use App\Category_model;
use App\ImageGallery_model;
use App\Products_model;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $products=Products_model::all();
        return view('frontEnd.index',compact('products'));
    }
    public function shop(){
        $products=Products_model::all();
        $byCate="";
        return view('frontEnd.products',compact('products','byCate'));
    }
    public function listByCat($id){
        $list_product=Products_model::where('categories_id',$id)->get();
        $byCate=Category_model::select('name')->where('id',$id)->first();
        return view('frontEnd.products',compact('list_product','byCate'));
    }
    public function detialpro($id){
        $detail_product=Products_model::findOrFail($id);
        $imagesGalleries=ImageGallery_model::where('products_id',$id)->get();
        $relateProducts=Products_model::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        return view('frontEnd.product_details',compact('detail_product','imagesGalleries','relateProducts'));
    }
    public function getsearch(Request $req)
    {
            $products = Products_model::where('p_name','like','%'.$req->key.'%')
                                        ->orWhere('price',$req->key)
                                        ->get();
            return view('frontEnd.search',compact('products'));
    }
}
