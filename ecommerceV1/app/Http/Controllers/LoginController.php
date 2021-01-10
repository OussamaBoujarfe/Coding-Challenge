<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
   public function login(Request $request){


if(Auth::attempt([
    'email' => $request->email,
    'password' => $request->password,
]))
{
    $user=User::where('email',$request->email)->first();
    if($user->is_admin())
    {
  return redirect()->route('stock.index');
    }
    return redirect()->route('home');
}
return redirect()->back();

   }
}
