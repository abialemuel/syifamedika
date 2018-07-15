<?php

namespace App\Http\Controllers\admin\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


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

      // Attempt to login
      if (Auth::guard('admin')->attempt(['id_karyawan' => $request->id_karyawan, 'password' => $request->password], $request->remember))
      {
        // if successful, redirect to admin.dashboard
        return redirect()->intended(route('admin.dashboard'));
      }
      // if unsuccessful, redirect to admin.login
      return redirect()->back()->withInput($request->only('id_karyawan','remember'));
    }

}
