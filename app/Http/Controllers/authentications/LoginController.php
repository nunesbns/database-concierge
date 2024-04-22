<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-login-basic');
  }


  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect()->intended('dashboard-analytics');
    }

    return back()->withErrors([
      'email' => __('The provided credentials do not match our records.'),
    ])->onlyInput('email');
  }
}
