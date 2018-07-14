<?php

namespace App\Http\Controllers\admin\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
      return view('admin.login');
    }
    public function login(Request $request)
    {
      // validate form data
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);
      // Attempt to login
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
      {
        // if successful, redirect to admin.dashboard
        return redirect()->intended(route('admin.dashboard'));
      }
      // if unsuccessful, redirect to admin.login
      return redirect()->back()->withInput($request->only('email','remember'));
    }
}
