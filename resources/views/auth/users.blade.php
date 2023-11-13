@extends('layouts.master')
@section('title','manage-users')
@section('css_file')
    {{asset('css/users.css')}}
@endsection
@section('content')
@include('partials.search')
<div class="container">
    <div class="row">
        <div class="col logo">
            <span>TAN</span><span>GO</span>
        </div>
        <div class="col-8 col-md-4 col-sm-6  options ml-auto">
            <div class="dropdown div-inline">
                <button class="btn btn-edit btn-secondary dropdown-toggle "   type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
            <a href="{{route('CategoryPage')}}">post ad</a>
        </div>   
    </div>
    <hr>
</div>  
<div class="row">
    <div class="col d-flex justify-content-center mb-3">
            <button type="submit" class="col-5 col-sm-5 col-md-3 btn back-font-edit" data-bs-toggle="modal" data-bs-target="#searchmodal">
                search users <i class="fas fa-search float-end mt-1"></i>
            </button>
    </div>
</div>
<div class="container ps-5 pt-3 pb-3  bg-edit">
    <div class="row font-color">
        <div class="col-4 me-5 me-md-0 border-end" style="overflow: hidden">
            <h6>USERNAME</h6>
        </div>
        <div class="col-4 d-none d-md-block border-end">
            <h6>EMAIL</h6>
        </div>  
        <div class="col-1 border-end">
            <h6>ID</h6>
        </div>
        <div class="col-3 ms-auto">
            <h6><i class="fas fa-trash-alt me-2"></i>DELETE</h6>
        </div>
    </div>
</div>
@include('layouts.users')

@endsection
