<?php

namespace App\Http\Controllers\admin\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('guest');
    }

    public function showLoginForm()
    {
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

}
