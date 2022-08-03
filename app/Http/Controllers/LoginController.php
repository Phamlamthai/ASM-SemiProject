<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    //
    public function showLogin(){
        return view('front.layout.login');
    }




    public function store(Request $request){
        if($request->isMethod('POST')){
            $validator = Validator::make($request->all(),[
                'email'=> 'required|email',
                'password' => 'required|confirmed'
            ]);
            if($validator->fails()){
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            if($request->hasFile('avatar')){
                $file = $request ->file('avatar');
                //$path = public_path
            }
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $remember = $request->remember;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember))
        {
            $menProducts = Product::where('featured', true)->where('product_category_id',1)->get();
            $womenProducts = Product::where('featured', true)->where('product_category_id',2)->get();
         
            return view('front.index',compact('menProducts','womenProducts'));
           
        }
    }
}
