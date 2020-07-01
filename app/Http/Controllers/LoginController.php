<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\user;
use Auth;

class LoginController extends Controller
{
  public function getLogin()
  {
    return view('/auth/login');
  }

  public function postLogin(Request $request)
  {

      // Validate the form data
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);

      // Attempt to log the user in
      // Passwordnya pake bcrypt
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
      // if successful, then redirect to their intended location
      return redirect()->intended('/admin');
      // return 'anda berhasil login';
    } else if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
      return redirect()->intended('/user');
    }else{
      return redirect('/')->with('error', 'Username atau Password anda salah');
    }

  }

  public function logout()
  {
    if (Auth::guard('admin')->check()) {
      Auth::guard('admin')->logout();
    } elseif (Auth::guard('user')->check()) {
      Auth::guard('user')->logout();
    }

    return redirect('/');

  }
}