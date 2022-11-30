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
  public function dashboard(Request $request)
  {
    return View('dashboard.dashboard');
  }
  public function logout()
  {
    Auth::guard('admin')->logout();
    return redirect('/');
  }
 
  public function account(Request $request)
  {
    $admin=Admin::find(Auth::guard('admin')->user()->id);
    if($request->isMethod('post')){
        $data=$request->all();
        if($data['new_password']==$data['confirm_password']&&!empty($data['new_password'])){
            $data['password']=Hash::make($data['new_password']);
            $admin->update($data);
            return redirect()->back()->with('success', 'thanh congg');
        }else if(empty($data['new_password'])&&empty($data['confirm_password'])){
            $data['password']=$admin['password'];
            $admin->update($data);
            return redirect()->back()->with('success', 'thanh cong');
        }else{
            return redirect()->back()->with('error', 'sai!');
        }
    }
    return View('admin.account', compact('admin'));
  }
  public function changePassword(Request $request){

 
  if (Hash::check($request->get('password'), $currentPass)) {
    $user = Admin::find(Auth::id());
    $user->password = Hash::make($request->get('password'));
    $user->save();

    return response()->json([
        'status' => true,
        'msg' => 'Your password changed successfully',
    ]);
} else {
    return response()->json([
        'status' => false,
        'msg' => 'Old password is wrong',
    ]);
}
}
}