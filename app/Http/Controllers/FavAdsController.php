<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ads;
use App\Models\User;
use DB;
use Session;

class FavAdsController extends Controller
{
    public function AddToFavs($AdId)
    {
        $UserId = session('UserId');
        $Fav = DB::table('favs')->insert([
            'user_id'   => $UserId,
            'ad_id'     => $AdId, 
        ]);
        return back();
    }
    public function GetFavs()
    {
        $UserId = session('UserId');
        $Favs = DB::table('favs')->where('user_id',$UserId)->pluck('ad_id');
        $Ads = ads::whereIn('id',$Favs)->paginate(9);
        return view('favs',['ads'=>$Ads]);
        
    }
}
