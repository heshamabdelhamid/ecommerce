<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function Login(LoginRequest $request)
    {
        // dd($request->all());
        $remember_me = $request->remember_me ? true : false ;

        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, $remember_me ])) {
            return redirect()->Route('admin.dashboard');
        }

        return back()->with(['error' => 'nooooo']);

    }

}
