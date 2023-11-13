<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ads;
use App\Models\User;
use DateTime;
use DB;
use Session;

class GetAdsController extends Controller
{
    public function MainAds()
    {
        $ads = ads::paginate(9);
        return view('main',['ads'=>$ads]);
    }
    public function GetAd($id)
    {
        $ViewsIncrement = ads::find($id)->increment('views',1);
        $AdInfo = ads::find($id);
        $OwnerInfo = ads::find($id)->user;
        return view ('ad',['ad_info'=>$AdInfo],['user_info' => $OwnerInfo]);
    }
    public function GetAdsByCateogry($category)
    {
        $AdsByCategory = ads::where('category',$category)->paginate(9);
        return view('main',['ads'=>$AdsByCategory]);
    }
    public function MyAds()
    {
        $MyAds = ads::where('user_id',session('UserId'))->paginate(9);
        return view('my-ads',['ads'=>$MyAds]);
    }

}