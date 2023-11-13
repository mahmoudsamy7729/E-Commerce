<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ads;
use App\Models\User;
use DB;
use Session;


class SearchController extends Controller
{
    public function GetLocationsByAjax($location)
    {
        $locations = ads::select('location')->where('location','like', '%'.$location.'%')->distinct()->get();
        return response()->json([
            'locations' => $locations,
        ]);
    }

    public function SearchFilters(Request $request)
    {
        $location = $request->input('location');
        $keyword  = $request->input('keyword');
        $ads = ads::where(function($query) use($keyword , $location)
        {
            if($keyword)
            {
                $query->where('title','like', '%'.$keyword.'%');
            }
            if($location)
            {
                $query->where('location',$location);
            }
        })->paginate(9);
        return view('main',['ads'=>$ads]);
    }
}