@extends('layouts.master')
@section('title','main')
@section('css_file')
    {{ asset('css/main_page.css') }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col logo">
        <span>TAN</span><span>GO</span>
    </div>
    <div class="col-8 col-md-4 col-sm-6  options ml-auto">
        <div class="dropdown div-inline">
            <button class="btn btn-edit btn-secondary dropdown-toggle" style="background: none;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{session('username')}}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#"><i class="fas fa-user li-edit"></i>profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-ad li-edit"></i>my ads</a></li>
                <li><a class="dropdown-item" href="{{route('favorites')}}"><i class="fas fa-star li-edit"></i>my favorites</a></li>
                <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt li-edit"></i>logout</a></li>
            </ul>
        </div>
        <span>|</span>
        <i class="fas fa-plus"></i>
        <a href="{{route('CategoryPage')}}">post ad</a>
    </div>
</div>
</div>
{{-- importing ads section --}}  
@include('layouts.ads')
{{-- ------------------ --}}
@endsection