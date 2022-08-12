<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
  public function index()
  {
    return view('login.index', [
      'title' => 'Login'
    ]);
  }

  public function loginSubmit(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'email:dns'],
      'password' => ['required', 'min:3', 'max:255']

      // 'password' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
    }

    return back()->with('loginError', 'Login failed!');
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
