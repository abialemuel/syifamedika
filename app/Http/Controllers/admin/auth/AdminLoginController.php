<?php

namespace App\Http\Controllers\admin\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use Session;

class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
    }

    public function showLoginForm()
    {
      $this->middleware('guest');
      return view('admin.login');
    }

    public function login(Request $request)
    {

      // Attempt to login
      if (Auth::attempt(['id_karyawan' => $request->id_karyawan, 'password' => $request->password]))
      {
        // if successful, redirect to admin.dashboard
        return redirect()->intended(route('admin.dashboard'));
      }
      // if unsuccessful, redirect to admin.login
      return redirect()->back()->withInput($request->only('id_karyawan'));
    }
    public function logout()
    {
      Session::flush();
      return redirect(route('admin.login'));
    }

}
