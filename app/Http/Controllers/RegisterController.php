<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;



//use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(UserRequest $req)
    {
        try
        {
            $img = empty($req->avatar) ? 'avatar.png' : $this->saveImage($req->avatar, 'images/avatars');
            User::create([
                'username'  => $req->username,
                'fullname'  => $req->fullname,
                'password'  => bcrypt($req->password),
                'type'      => $req->type,
                'email'     => $req->email,
                'activate'    => 0,
                'avatar'    => $img
            ]);
            return "oui";

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
/*
    public function editMember($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.editMember', ['user' => $user]);
    }

    public function updateMember(UpdateRequest $req)
    {

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
    */

}
