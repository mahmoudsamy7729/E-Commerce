
@extends('layouts.master')
@section('title','login')
@section('css_file')
    {{asset('css/login.css')}}
@endsection

{{-- ------------------------------------------ --}}

@section('content')
    <div class="container-fluid mb-5">
        <div class="row justify-content-center mid">
            <div class="col-12 col-sm-9 col-md-5 form-container mid">
                <form  method="POST" action="{{ route('login') }}" >
                    @csrf
                    <div class="row">
                        <div class="col logo d-flex justify-content-center">
                            <span>TAN</span><span>GO</span>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        @error('email')
                            <span class="error"> {{$message}} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        @error('password')
                            <span class="error"> {{$message}} </span>
                        @enderror

                        {{-- 
                        @if($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                        @endif--}}


                    </div>
                    <div id="passwordHelp" class="form-text"><a href="">forgot password ? </a></div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">remember me</label>
                    </div>
                    <a href=""><button type="submit" class="btn btn-primary col-12" name="login">SUBMIT</button></a>

                    <hr>                    
                </form>
                <div class="row">   
                    <a href="#" class="col-12 col-md-6">
                        <button type="submit" class="btn btn-primary mb-3 col-12" style="background-color: #3b5998;font-weight: 500;"><i class="fab fa-facebook-f me-2"></i> LOGIN WITH FACEBOOK</button>
                    </a>
                    <a href="#" class="col-12 col-md-6">
                        <button type="submit" class="btn btn-primary mb-3 col-12 " style="background-color: #AA3A3A;font-weight: 500;"><i class="fab fa-google me-2 "></i> LOGIN WITH GOOGLE</button>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

    
@endsection