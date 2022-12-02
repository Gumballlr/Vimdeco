<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function login(Request $request)
  {
    // dd(Hash::make(1));
    if ($request->isMethod('post')) {
      $data = $request->all();
      // dd(Hash::make(1));
      if (Auth::guard('admin')->attempt(['name' => $data['name'], 'password' => $data['password']])) {
        return redirect('/account');
      } else {
        return redirect()->back();
      }
    }
    return View('home.login');
  }
  public function dashboard(Request $request)
  {
    return View('dashboard.dashboard');
  }
  public function logout()
  {
    Auth::guard('admin')->logout();
    return redirect('/');
  }
}