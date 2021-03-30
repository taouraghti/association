<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;


    public function logged(LoginRequest $req)
    {
        if(Auth::attempt(['username' => $req->input('username'), 'password' => $req->input('password')]))
        {
            $users = DB::table('users')->where('username', $req->input('username'))->get();
            //return redirect()->route('home',[$users]);
            //return view('welcome', ['users' => $users]);
            return "oui";
        }
        else
            return redirect()->back()->with(['err' => 'Username or password incorrect']);
    }

    /*public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->guest(route( 'get.admin.login' ));
    }*/
}
