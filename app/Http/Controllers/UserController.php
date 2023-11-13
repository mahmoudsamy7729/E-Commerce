<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\MyTestMail;
use App\Notifications\HelloUser;
use Illuminate\Support\Facades\mail;

class UserController extends Controller
{
    public function SignupPage()
    {
        return view ('auth.signup');
    }
    public function signup(Request $request)
    {
        $request->validate([
            'fname'      => 'required',
            'lname'      => 'required',
            'username'   => 'required',
            'phone'      => 'required',
            'email'      => 'required',
            'password'   => 'required',
            'photo'      => 'required',
        ]);
        $password = Hash::make($request->password);
        $image = $request->file('photo'); 
        $image_name = $this->uploadProfilePic($image);
        $query = User::create([
            'fname'         => $request->fname ,
            'lname'         => $request->lname ,
            'username'      => $request->username ,
            'email'         => $request->email ,
            'phone'         => $request->phone ,
            'password'      => $password ,
            'rule_no'       => 3,
            'profile_photo' =>$image_name,
        ]);
        return redirect('/');
    }
    public function uploadProfilePic($image)
    {
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('profile-photos'), $image_name);
        return $image_name;
    }
    public function LoginPage()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        session(['password' => $request->password]);
        if (Auth::guard('user')->attempt($credentials))
        {
            $user = Auth::user();
            $request->session()->regenerate();
            session(['email'    => $user->email]);
            session(['username' => $user->username]);
            session(['phone'    => $user->phone]);
            session(['UserId'       => $user->id]);
            return redirect('/');
            
        }else
        {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',]);
        }
        
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function GetUser($UserId)
    {
        $user = User::find($UserId);
        return view('profile',['user_info'=> $user]);
    }
}