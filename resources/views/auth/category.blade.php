@extends('layouts.master')
@section('title','post ad')
@section('css_file')
    {{ asset('css/post_ad.css') }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center mtt">
        <div class="col-12 col-sm-9 col-md-6">
            <div class="form-container">
                <div class="row">
                    <div class="col logo d-flex justify-content-center" >
                        <span>TAN</span><span>GO</span>
                    </div>
                <hr>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h4>choose category</h4>
                    </div>
                    <hr>
                </div>
                <div class="options-container ">
                    <div class="row">
                        <div class="col-4 cat-iteam mb-5 ">
                            <a href="{{route('ad_page','real-estate')}}" class="cat-iteam-content">
                                <img src="{{asset('img/homepage.png')}}" class="cat-img" alt="">
                                <p class="cat-title">real estate</p>
                            </a>
                            
                        </div>
                        <div class="col-4 cat-iteam mb-5">
                            <a href="{{route('ad_page','cars')}}" class="cat-iteam-content">
                                <img src="{{asset('img/car.png')}}" class="cat-img" alt="">
                                <p class="cat-title">cars</p>
                            </a>
                            
                        </div>
                        <div class="col-4 cat-iteam mb-5">
                            <a href="{{route('ad_page','motorcycles')}}" class="cat-iteam-content">
                                <img src="{{asset('img/motorbike.png')}}" class="cat-img" alt="">
                                <p class="cat-title">motorcycles</p>
                            </a>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 cat-iteam mb-5">
                            <a href="{{route('ad_page','computers')}}" class="cat-iteam-content">
                                <img src="{{asset('img/desktop.png')}}" class="cat-img" alt="">
                                <p class="cat-title">computers</p>
                            </a>
                            
                        </div>
                        <div class="col-4 cat-iteam mb-5">
                            <a href="{{route('ad_page','electronics')}}" class="cat-iteam-content">
                                <img src="{{asset('img/electronics.png')}}" class="cat-img" alt="">
                                <p class="cat-title">electronics</p>
                            </a>
                            
                        </div>
                        <div class="col-4 cat-iteam mb-5">
                            <a href="{{route('ad_page','furniture')}}" class="cat-iteam-content">
                                <img src="{{asset('img/couch.png')}}" class="cat-img" alt="">
                                <p class="cat-title">furniture</p>
                            </a>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 cat-iteam mb-5">
                            <a href="{{route('ad_page','entertainment')}}" class="cat-iteam-content">
                                <img src="{{asset('img/clapperboard.png')}}" class="cat-img" alt="">
                                <p class="cat-title">entertainment</p>
                            </a>
                            
                        </div>
                        <div class="col-4 cat-iteam mb-5">
                            <a href="{{route('ad_page','jobs')}}" class="cat-iteam-content">
                                <img src="{{asset('img/job-search.png')}}" class="cat-img" alt="">
                                <p class="cat-title">jobs</p>
                            </a>
                            
                        </div>
                        <div class="col-4 cat-iteam mb-5">
                            <a href="{{route('ad_page','hobbies')}}" class="cat-iteam-content">
                                <img src="{{asset('img/jigsaw.png')}}" class="cat-img" alt="">
                                <p class="cat-title">hobbies</p>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

