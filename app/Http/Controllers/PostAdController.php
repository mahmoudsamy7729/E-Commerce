<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ads;
use App\Models\User;
use DB;
use Session;    

class PostAdController extends Controller
{
    public function MainCategoryPage()
    {
        return view('auth.category');
    }
    public function ChooseMainCategory($main_category)
    {
        session(['MainCategory'=> $main_category]);
        return view('auth.post_ad');
    }
    public function PostAd(Request $request)
    {
        $user_id        = session('UserId');
        $main_category  = session('MainCategory');
        $views          = 0;
        $request->validate([
            'title' =>  'required',
            'price' =>  'required',
            'description'   => 'required',
            'photo' =>  'required',
            'location'  =>  'required',
        ]);
        $image = $request->file('photo');
        $image_name = $this->UploadAdPic($image);
        $post_ad = ads::create([
            'user_id'       => $user_id,
            'category'      => $main_category,
            'title'         => $request->title,
            'price'         => $request->price,
            'description'   => $request->description,
            'photo'         => $image_name,
            'location'      => $request->location,
            'views'         => $views,
        ]);
        return redirect('/');
    }
    public function UploadAdPic($image)
    {
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $image_name);
        return $image_name;
    }

}