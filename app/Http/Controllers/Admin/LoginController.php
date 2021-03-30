<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;



class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.Auth.login');
    }

    public function login(LoginRequest $req)
    {
        if(Auth::guard('admin')->attempt(['username' => $req->input('username'), 'password' => $req->input('password')]))
            return redirect()->route('admin.dashboard');
        else
            return redirect()->back()->with(['err' => 'Username or password incorrect']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->guest(route( 'get.admin.login' ));
    }
}
