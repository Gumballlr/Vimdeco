<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login(Request $request){
        // dd(Hash::make(1));
        if($request->isMethod('post')){
            $data=$request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                return redirect('/home/home');
            }else{
                return redirect()->back();
            }
        }
        return View('home.login');
    }
}
