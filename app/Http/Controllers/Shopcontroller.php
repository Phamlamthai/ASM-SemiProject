<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Shopcontroller extends Controller
{
    public function show($id){

       // $product = Product::findOrfail($id);
        return view('front.shop.show');
    }
    public function shop(){
        $products = Product::all();

        return view('front.shop.shop',compact('products'));
        //dd($products);
    }
}
