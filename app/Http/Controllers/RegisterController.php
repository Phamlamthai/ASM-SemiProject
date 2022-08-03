<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
    //
    public function showRegister(){
        return view('front.layout.register');
    }
    public function postRegister(Request $request){
        //dd($request);
        $user = new User;
        $user->user_name = $request->username;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->description = $request->description;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('front.layout.login')->with('message','Created Succesfully!');
    }
}
