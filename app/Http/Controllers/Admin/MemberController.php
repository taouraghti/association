<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\userRequest;
use App\Http\Requests\updateRequest;
use Illuminate\Support\Facades\DB;


//use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function addMember()
    {
        return view('admin.addMember');
    }

    public function insertMember(UserRequest $req)
    {
        try
        {
            $img = empty($req->avatar) ? 'avatar.png' : $this->saveImage($req->avatar, 'images/avatars');
            User::create([
                'username'  => $req->username,
                'fullname'  => $req->fullname,
                'password'  => bcrypt($req->password),
                'email'     => $req->email,
                'activate'    => 1,
                'avatar'    => $img
            ]);
            return view('admin.template',['msg' => "member added succesfully"]);

        }catch(\Exception $ex)
        {
            //return 'non';
        }
    }

    protected function saveImage($photo, $path)
    {
        $file_extension = $photo->getClientOriginalExtension();
        $imageName = time() . '.' . $file_extension;
        $img = rand(0, 100000) . '_' . $imageName;
        $photo->move($path, $img);
        return $img;
    }

    public function editMember($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.editMember', ['user' => $user]);
    }

    public function updateMember(UpdateRequest $req)
    {
        /*if(DB::table('users')->where('id', $req->userid)->value('avatar') == $req->avatar)
            $img = $req->avatar;
        else
            $img = $this->saveImage($req->avatar, 'images/avatars');*/
        $img = 'avatar.png';
        $password = (empty($req->newpassword)) ? $req->oldpassword : bcrypt($req->newpassword);
        try
        {
            DB::table('users')
              ->where('id', $req->userid)
              ->update(['username'  => $req->username,
                        'fullname'  => $req->fullname,
                        'password'  => $password,
                        'email'     => $req->email,
                        'avatar'    => $img
              ]);
            return view('admin.template',['msg' => "member edited succesfully"]);
              //return $req->avatar;
        }catch(\Exception $ex)
        {

        }
    }

    public function activateMember($id)
    {
        DB::table('users')
        ->where('id', $id)
        ->update(['activate'  => 1]);
        return back();
    }

    public function deleteMember($id)
    {
        DB::table('users')
        ->where('id', $id)
        ->delete();
        return back();
    }

}
