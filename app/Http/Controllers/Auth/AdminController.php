<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
  public function login(Request $request)
  {
    // dd(Hash::make(1));
    if ($request->isMethod('post')) {
      $data = $request->all();
      // dd(Hash::make(1));
      if (Auth::guard('admin')->attempt(['name' => $data['name'], 'password' => $data['password']])) {
        return redirect('/dashboard');
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
}