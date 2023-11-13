@extends('layouts.master')
@section('title','dashboard')
@section('css_file')
    {{asset('css/dashboard.css')}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col logo">
            <span>TAN</span><span>GO</span>
        </div>
        <div class="col-8 col-md-4 col-sm-6  options ml-auto">
            <div class="dropdown div-inline">
                <button class="btn btn-edit btn-secondary dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{session('username')}}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user li-edit"></i>profile</a></li>
                    <li><a class="dropdown-item" href="{{route('dashboard')}}"><i class="fab fa-slack li-edit"></i>dashboard</a></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt li-edit"></i>logout</a></li>
                </ul>
            </div>
            <span>|</span>
            <i class="fas fa-plus"></i>
            <a href="#">add admin</a>
        </div>   
    </div>
    <hr>
</div> 
<div class="container form-container mb-5">
    <div class="row">
        <div class="col-4 opt-iteam border-end border-bottom">
            <a href="{{route('manage-users')}}" class="opt-iteam-content ">
                <img src="{{asset('img/manager.png')}}" alt="" class="opt-img mt-3 img-fluid">
                <h6 class="opt-title mt-1">manage users</h6>
            </a>
        </div>
        <div class="col-4 opt-iteam border-end border-bottom">
            <a href="{{route('main')}}" class="opt-iteam-content">
                <img src="{{asset('img/tear-off-ads.png')}}" alt="" class="opt-img mt-3 img-fluid">
                <h6 class="opt-title mt-1">manage ads</h6>
            </a>
        </div>
        <div class="col-4 opt-iteam border-bottom">
            <a href="{{route('manage-admins')}}" class="opt-iteam-content">
                <img src="{{asset('img/admin.png')}}" alt="" class="opt-img mt-3 img-fluid">
                <h6 class="opt-title mt-1">manage admins</h6>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-4 opt-iteam border-end border-bottom">
            <a href="#" class="opt-iteam-content">
                <img src="{{asset('img/statistics.png')}}" alt="" class="opt-img mt-3 img-fluid">
                <h6 class="opt-title mt-1">statistics</h6>
            </a>
        </div>
        <div class="col-4 opt-iteam border-end border-bottom">
            <a href="#" class="opt-iteam-content">
                <img src="{{asset('img/transaction.png')}}" alt="" class="opt-img mt-3 img-fluid">
                <h6 class="opt-title mt-1">transactions</h6>
            </a>
        </div>
        <div class="col-4 opt-iteam border-bottom">
            <a href="{{route('main')}}" class="opt-iteam-content">
                <img src="{{asset('img/mainpage.png')}}" alt="" class="opt-img mt-3 img-fluid">
                <h6 class="opt-title mt-1">main</h6>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-4 opt-iteam border-end border-bottom">
            <a href="{{route('mange_reports')}}" class="opt-iteam-content">
                <img src="{{asset('img/report.png')}}" alt="" class="opt-img mt-3 img-fluid">
                <h6 class="opt-title mt-1">REPORTS</h6>
            </a>
        </div>
    </div>
</div>
@endsection