<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    //
    public function index()
    {
        $menProducts = Product::where('featured', true)->where('product_category_id',1)->get();
        $womenProducts = Product::where('featured', true)->where('product_category_id',2)->get();
         

        // $blogs = blog::orderby('id','desc')->limit(3)-get(3);
        return view('front.index',compact('menProducts','womenProducts'));
    }
}
