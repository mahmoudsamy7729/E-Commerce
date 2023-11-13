<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ads;
use App\Models\User;
use DB;
use Session;  

class AdController extends Controller
{
    public function UpdatePage($AdId)
    {
        session(['ad_id' => $AdId]);
        return view('auth.update-ad');
    }
    public function UpdateAd(Request $request)
    {
        $request->validate([
            'title'  ,
            'price'   ,
            'description' ,
            'photo'   ,
            'location'   ,
        ]);
        $ad = ads::find(session('ad_id'));
        if($request->title != null)
        {
            $ad->title = $request->title;
        }
        if($request->file('photo') != null)
        {
            $image = $request->file('photo');
            $image_name = $this->UpdateAdPic($image);
            $ad->photo = $image_name;
        }
        if($request->price != null)
        {
            $ad->price = $request->price;
        }
        if($request->description != null)
        {
            $ad->description = $request->description;
        }
        if($request->location != null)
        {
            $ad->location = $request->location;
        }
        $ad->save();
        return redirect()->intended();
    }
    public function UpdateAdPic($image)
    {
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $image_name);
        return $image_name;
    }
    public function DeleteAd($AdId)
    {
        $ad = ads::where('id',$AdId)->delete();
        return redirect('/');
    }
}