<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $users = DB::table('users')->limit(6)->orderBy('created_at','desc')->get();
        $all = DB::table('users')->count();
        $pending = DB::table('users')->where('activate', 0)->count();
        return view('admin.dashboard', ['users' => $users, 'all' => $all, 'pending' => $pending ]);
    }

    public function getMembers(){
        $users = DB::table('users')->orderBy('created_at','desc')->get();
        return view('admin.members', ['users' => $users]);
    }

    public function pendingMembers()
    {
        $users = DB::table('users')->where('activate', 0)->get();
        return view('admin.members', ['users' => $users]);
    }
}
