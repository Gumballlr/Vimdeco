<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
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
  public function account(Request $request)
  {
    return View('admin.account');
  }
  public function logout()
  {
    Auth::guard('admin')->logout();
    return redirect('/');
  }
  public function temp(Request $request)
  {
    if ($request->isMethod('post')) {
      $data = $request->all();
      $validator = Validator::make($data, [
        'confirm_password' => 'same:new_password'
      ]);
      if ($validator->fails()) {
        return redirect()->back();
      } else {
        if (!isset($data['new_password']) && !isset($data['confirm_password'])) {
          $data['password'] = Admin::find(Auth::guard('admin')->user()->id)->password;
          Admin::find(Auth::guard('admin')->user()->id)->update($data);
        } else {
          $data['password'] = Hash::make($data['new_password']);
          Admin::find(Auth::guard('admin')->user()->id)->update($data);
        }
        return redirect()->back();
      }
    }
    return View('admin.account');
  }
  public function changePassword(Request $request)
  {
    return view('admin.account');
  }

  public function changePasswordSave(Request $request)
  {

    $this->validate($request, [
      'current_password' => 'required|string',
      'new_password' => 'required|confirmed|min:1|string'
    ]);
    $auth = Auth::user();

    // The passwords matches
    if (!Hash::check($request->get('current_password'), $auth->password)) {
      return back()->with('error', "Current Password is Invalid");
    }

    // Current password and new password same
    if (strcmp($request->get('current_password'), $request->new_password) == 0) {
      return redirect()->back()->with("error", "New Password cannot be same as your current password.");
    }

    $user =  Admin::find($auth->id);
    $user->password =  Hash::make($request->new_password);
    $user->save();
    return back()->with('success', "Password Changed Successfully");
  }
}