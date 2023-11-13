@extends('layouts.master')
@section('title','main')
@section('css_file')
    {{ asset('css/main_page.css') }}
@endsection
@section('content')
    @include('partials.login')
    @include('search')
    <div class="container">
        <div class="row">
            <div class="col logo">
                <span>TAN</span><span>GO</span>
            </div>
            @auth
                <div class="col-8 col-md-4 col-sm-6  options ml-auto">
                    <div class="dropdown div-inline">
                        <button class="btn btn-edit btn-secondary dropdown-toggle" style="background: none;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            {{session('username')}}
                        </button>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            @can('isadmin')
                            <li><a class="dropdown-item" href="{{route('profile',session('UserId'))}}"><i class="fas fa-user li-edit"></i>profile</a></li>
                            <li><a class="dropdown-item" href="{{route('dashboard')}}"><i class="fab fa-slack li-edit"></i>dashboard</a></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt li-edit"></i>logout</a></li>
                            @endcan
                            @cannot('isadmin')
                            <li><a class="dropdown-item" href="{{route('profile',session('UserId'))}}"><i class="fas fa-user li-edit"></i>profile</a></li>
                            <li><a class="dropdown-item" href="{{route('my-ads')}}"><i class="fas fa-ad li-edit"></i>my ads</a></li>
                            <li><a class="dropdown-item" href="{{route('favorites')}}"><i class="fas fa-star li-edit"></i>my favorites</a></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt li-edit"></i>logout</a></li>
                            @endcannot
                        </ul>
                    </div>
                    <span>|</span>
                    <i class="fas fa-plus"></i>
                    <a href="{{route('CategoryPage')}}">post ad</a>
                </div>
            @endauth
            @guest                
                <div class="col-7 col-md-4 col-sm-8  options ml-auto">
                    <i class="fas fa-sign-in-alt"></i>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal">login</a>
                    <span>|</span>
                    <i class="fas fa-user-plus"></i>
                    <a href="{{route('SignupPage')}}">signup</a>
                    <span>|</span>
                    <i class="fas fa-plus"></i>
                    <a href="{{route('CategoryPage')}}">post ad</a>
                </div>
            @endguest
            <div class=" container form-container mtt">
                <div class="row">
                    <div class="col-12 col-md-4 col-sm-6 d-flex justify-content-center mb-3 opt "  >
                    <a href="{{route('AdsByCateogry','real-estate')}}" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('img/estate.jpg'); background-size: cover; "><p class="d-flex justify-content-center">real estate</p></a>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex justify-content-center mb-3 opt "  >
                        <a href="{{route('AdsByCateogry','cars')}}" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('img/car.jpg'); background-size: cover; "><p class="d-flex justify-content-center">cars</p></a>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex justify-content-center mb-3  opt"  >
                        <a href="{{route('AdsByCateogry','motorcycles')}}" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('img/motor.jpg'); background-size: cover; "><p class="d-flex justify-content-center">motorcycles</p></a>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex justify-content-center mb-3  opt"  >
                        <a href="{{route('AdsByCateogry','computers')}}" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('img/computers.jpg'); background-size: cover; "><p class="d-flex justify-content-center">computers</p></a>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex justify-content-center mb-3 opt"  >
                        <a href="{{route('AdsByCateogry','electronics')}}" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('img/electronics.jpeg'); background-size: cover; "><p class="d-flex justify-content-center">electronics</p></a>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex justify-content-center mb-3 opt "  >
                        <a href="{{route('AdsByCateogry','furniture')}}" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('img/furniture.jpg'); background-size: cover; "><p class="d-flex justify-content-center">furniture</p></a>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex justify-content-center mb-3 opt"  >
                        <a href="{{route('AdsByCateogry','entertainment')}}" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('img/entertainment.jpg'); background-size: cover; "><p class="d-flex justify-content-center">entertainment</p></a>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex justify-content-center mb-3 opt"  >
                        <a href="{{route('AdsByCateogry','jobs')}}" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('img/jobs.jpg'); background-size: cover; "><p class="d-flex justify-content-center">jobs</p></a>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex justify-content-center mb-3 opt"  >
                        <a href="{{route('AdsByCateogry','hobbies')}}" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('img/hobbies.jpg'); background-size: cover; "><p class="d-flex justify-content-center">hobbies</p></a>
                    </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.ads')
@endsection
<script>
    function SearchByLocation()
    {
        var location = document.getElementById('location').value;
        var url = "{{route('SearchByLocation',':location')}}";
        $('#loc_search').empty();
        $(document).ready(function()
        {
            $.ajax(
                {
                    type: "GET",
                    url: url.replace(':location',location),
                    datatype: "json",
                    success: function(response)
                    {
                        for (var i =0 ; i <response.locations.length; i++)
                        {
                            var loc = "'loc'";
                            loc = loc.replace('loc',response.locations[i].location)
                            $("#loc_search").append('<li><a class="dropdown-item" onclick="location_choose('+loc+')"  href="#">'+response.locations[i].location+'</a></li>')
                        }
                    }
                }
            )
        });
    }
    function location_choose(location)
    {
        var location = document.getElementById('location').value =  location;
    }
</script>