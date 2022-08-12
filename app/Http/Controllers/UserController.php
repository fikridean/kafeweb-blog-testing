<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
  public function index()
  {
    return view('users', [
      "title" => "All Users",
      "users" => User::all()
    ]);
  }

  public function profile(User $user)
  {
    return view('user', [
      "title" => $user->username,
      "user" => $user
    ]);
  }
}
