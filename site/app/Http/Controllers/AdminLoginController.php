<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Admin;
use Auth;
use Hash;
use Lang;
class AdminLoginController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function adminLogin(Request $request){
        $this->validate($request, [
        'email'   => 'required',
        'password' => 'required',
      ]);
      $remember = $request->has('remember') ? true : false;
    
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],$remember)) {
        // if successful, then redirect to their intended location
        return redirect()->route('admin.home');
      }
      else{
         if ( ! Admin::where('email', $request->email)->first() ) {
            return redirect()->back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                   'email' => Lang::get('Email Not registered.'),
                ]);
        }

        if ( ! Admin::where('email', $request->email)->where('password', Hash::make($request->password))->first() ) {
            return redirect()->back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'password' => Lang::get('Invalid password'),
                ]);
        }
    }
}
}
