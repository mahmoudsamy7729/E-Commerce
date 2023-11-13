<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ads;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('auth.dashboard');
    }
    public function GetUsers()
    {
        $users = User::select()->where('rule_no','!=',1)->get();
        return view('auth.users',['users'=>$users]);
    }
    public function DeleteUser($id)
    {
        $DeletedUser = User::select()->where('id',$id)->delete();
        $DeleteAds = ads::select()->where('user_id',$id)->delete();
        return view('auth.dashboard');
        
    }
    public function GetAdmins()
    {
        $admins = User::select()->where('rule_no',1)->get();
        return view('auth.admins',['admins'=>$admins]);
    }

}