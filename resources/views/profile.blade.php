@extends('layouts.master')
@section('title',$user_info->fname)
@section('css_file')
    {{asset('css/ad.css')}}
@endsection
@section('content')
<div class="container  border  mtt container-bg">
    <div class="row mtt mb-3">
        <div class=" col-md-7 ad-container">
            <form action="" method="post">
                <div class="col-12 logo d-flex justify-content-center">
                    <span>TAN</span><span>GO</span>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label">First name</label>
                        <input type="text" disabled class="form-control" value="{{$user_info->fname}}"  name="fname">  
                        @error('fname')
                            <span class="error"> {{$message}} </span>
                        @enderror  
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">Last name</label>
                        <input type="text" class="form-control" disabled value="{{$user_info->lname}}"  name="lname">
                        @error('lname')
                            <span class="error"> {{$message}} </span>
                        @enderror
                    </div>
                </div> 
                <div class="mb-3">
                    <label  class="form-label">username</label>
                    <input type="text" class="form-control"disabled value="{{$user_info->username}}"   name="username">
                </div> 
                <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input type="email" class="form-control" disabled value="{{$user_info->email}}"  name="email">
                    @error('email')
                        <span class="error"> {{$message}} </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">phone</label>
                    <input type="number" class="form-control"disabled value="{{$user_info->phone}}" name="phone">
                    @error('phone')
                        <span class="error"> {{$message}} </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control" disabled  name="password">
                    @error('password')
                        <span class="error"> {{$message}} </span>
                    @enderror
                </div>   
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary col-6" name="register">SUBMIT</button>    
                </div>
                <hr>
            </form>
        </div>
        <div class=" border col-md-4 info-container ml-auto mb-3">
        <div class="row">
            <div class="col logo d-flex justify-content-center" >
                <span>TAN</span><span>GO</span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col headline d-flex justify-content-center"><h6>PROFILE</h6></div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                @if ($user_info->profile_photo)
                    <img class="img-block" src="{{asset("profile-photos/".$user_info->profile_photo)}}" alt="" height="100%" width="50%">            
                @else
                    <img class="img-block" src="{{asset('img/user.jpg')}}" alt="" height="100%" width="50%">
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col username d-flex justify-content-center mtt"><h6>{{ $user_info->fname }}</h6></div>
        </div>
        <hr>
        <div class="container">
            <div class="ad">
            <a href=""><img src="img/1.jpg" alt="" width="100%" height=auto></a>
            </div>
        </div>
        </div>
        </div>
    </div>
    <div class="container">
    <div class="ad">
        <a href=""><img src="img/1.jpg" alt="" width="100%" height=auto></a>
    </div>
    </div>

    
@endsection 