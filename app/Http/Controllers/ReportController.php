<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ads;
use App\Models\User;
use DateTime;
use DB;
use Session;

class ReportController extends Controller
{
    public function ReportAd($AdId)
    {
        $report = DB::table('reports')->insert([
            'ad_id'     => $AdId, 
        ]);
        return back();
    }
    public function GetReports()
    {
        $reports = DB::table('reports')->get();
        return view('auth.reports',['reports'=>$reports]);
    }
}