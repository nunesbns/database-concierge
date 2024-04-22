<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;

class ForgotPasswordController extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-forgot-password-basic');
  }
}
