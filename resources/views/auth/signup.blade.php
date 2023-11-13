@extends('layouts.master')
@section('title','register')
@section('css_file')
    {{asset('css/register.css')}}
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mid">
        <div class="col-12 col-sm-9 col-md-5 mb-5">
            <form class="form-container" method="POST" action="{{ route('signup') }}" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col logo d-flex justify-content-center">
                        <span>TAN</span><span>GO</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">First name</label>
                        <input type="text" class="form-control"  name="fname">  
                        @error('fname')
                            <span class="error"> {{$message}} </span>
                        @enderror  
                    </div>
                    <div class="col mb-3">
                        <label  class="form-label">last name</label>
                        <input type="text" class="form-control"   name="lname">
                        @error('lname')
                            <span class="error"> {{$message}} </span>
                        @enderror
                    </div>
                </div> 
                <div class="mb-3">
                    <label  class="form-label">username</label>
                    <input type="text" class="form-control"   name="username">
                </div>   
                <div class="form-group row mb-3">
                    <label class="col-sm-2 col-form-label" >photo</label>
                    <div class="col-sm-10">
                        <input type="file" name="photo" >
                    </div>
                    @error('photo')
                        <span class="error"> {{$message}} </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input type="email" class="form-control"  name="email">
                    @error('email')
                        <span class="error"> {{$message}} </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">phone</label>
                    <input type="number" class="form-control" name="phone">
                    @error('phone')
                        <span class="error"> {{$message}} </span>
                    @enderror
                </div>   
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control"  name="password">
                    @error('password')
                        <span class="error"> {{$message}} </span>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input"  required>
                    <label class="form-check-label" >by clicking submit you agree to <a href="#">the terms and conditions</a></label>
                </div>
                <button type="submit" class="btn btn-primary col-12" name="register">SUBMIT</button>    
            </form>
        </div>
    </div>

</div>
    
@endsection