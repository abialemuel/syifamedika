<?php

namespace App\Http\Controllers\admin\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminLogoutController extends Controller
{
    //
    public function logout()
    {
      Session::flush();
      return redirect(route('admin.login'));
    }
}
