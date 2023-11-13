@extends('layouts.master')
@section('title',$ad_info->title)
@section('css_file')
    {{asset('css/ad.css')}}
@endsection
@section('content')
<div class="container  border  mtt container-bg">
    <div class="row mtt mb-3">
        <div class=" col-md-7 ad-container">
            <div id="carouselExampleIndicators" class="carousel slide mb-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{asset("uploads/".$ad_info->photo)}}" class="d-block w-100" alt="..." width="20%">
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset("uploads/".$ad_info->photo)}}" class="d-block w-100" alt="..." width="20%">
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset("uploads/".$ad_info->photo)}}" class="d-block w-100" alt="..." width="20%">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
                @can('update', $ad_info->id)
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <h5>MANAGE YOUR AD</h5>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="{{route('update_page',$ad_info->id)}}" class="btn btn-edit btn-primary me-5 update"><i class="fas fa-pencil-alt me-1"></i> UPDATE</a>
                        <a href="{{route('delete-ad',$ad_info->id)}}" class="btn btn-edit btn-primary delete "><i class="fas fa-trash-alt me-2"></i>DELETE</a>
                    </div>
                </div>
                @endcan
                <div class="row">
                    <div class="col disc">
                    <h4>{{ $ad_info->title }}</h4>
                    </div>
                </div>
                <div class="row">
                <div class="col mb-3">
                    <i class="fas fa-clock fa-disc-edit"></i><span class="disc-span">4 days ago</span>
                    <i class="fas fa-map-marker-alt fa-disc-edit"></i></i><span class="disc-span">{{ $ad_info->location }}</span>
                    <i class="fas fa-fingerprint fa-disc-edit"></i><span class="disc-span">{{ $ad_info->id }}</span>
                    <i class="fas fa-eye fa-disc-edit"></i><span class="disc-span">{{ $ad_info->views }}</span>
                    
                </div>
                </div>
                <hr>
                <div class="row">
                    <nav>
                        <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <button style="color: #212529;font-weight: bold;" class="nav-link active text-uppercase nav-edit" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">description</button>
                            <button style="color: #212529;font-weight: bold;" class="nav-link text-uppercase nav-edit" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">reviews</button>
                            <button style="color: #212529;font-weight: bold;" class="nav-link text-uppercase nav-edit" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                        </div>
                    </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row mt-4">
                                    <div class="col disc">
                                        <p>{{$ad_info->description}}</p>
                                    </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row mt-4">
                                    <h6 >PUT YOUR REVIEW</h6>
                                    </div>
                                    <div class="row">
                                    <form  action="php/main.php" method="POST">
                                        <div class="row">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control mb-3" placeholder="ENTER YOUR REVIEW" name="review">
                                        </div>
                                        <div class="col mb-3">
                                            <button type="submit" class="btn btn-primary" name="review">SUBMIT</button> 
                                        </div>
                                        </div>
                                    </form>
                                    <hr>
                    
                                    </div>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <div class="username details">
                                        <h6>Mahmoud Samy</h6>
                                        <i class="fas fa-clock fa-disc-edit"></i><span class="disc-span">4 days ago</span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="review">
                                        <p> took much longer to be accepted in Western Europe and other parts of the world</p> 
                                        </div>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                    <div class="col-md-3">
                                        <div class="username">
                                        <h6>Mahmoud Samy</h6>
                                        <i class="fas fa-clock fa-disc-edit"></i><span class="disc-span">4 days ago</span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="review">
                                        <p> took much longer to be accepted in Western Europe and other parts of the world</p> 
                                        </div>
                                    </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                        </div>
                </div>
        </div>
        <div class=" border col-md-4 info-container ml-auto mb-3">
        <div class="row">
            <div class="col logo d-flex justify-content-center" >
                <span>TAN</span><span>GO</span>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col headline d-flex justify-content-center"><h6>POSTED BY</h6></div>
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
        <div class="row">
            <div class="col username d-flex justify-content-center "><h6>Contact Advertiser</h6></div>
        </div>
        <div class="row mb-3">
            <div class="col username d-flex justify-content-center options "><a href=""><i class="fas fa-phone-square-alt fa-edit"></i></a>
            <span>|</span><a href=""><i class="fas fa-sms fa-edit"></i></a> <span>|</span> <a href=""><i class="fas fa-envelope fa-edit"></i></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col username d-flex justify-content-center "><h6>request a call back</h6></div>
        </div>
        <form action="">
            <div class="form-group row mb-3 d-flex justify-content-center">
                <div class="col-sm-10 ">
                    <input type="text" class="form-control" placeholder="NAME" name="name">
                </div>
            </div>
            <div class="form-group row mb-3 d-flex justify-content-center">
                <div class="col-sm-10 ">
                    <input type="number" class="form-control" placeholder="PHONE NUMBER" name="name">
                </div>
            </div>
            <div class="form-group row mb-3 d-flex justify-content-center">
                <div class="col-sm-10 ">
                    <input type="email" class="form-control" placeholder="EMAIL" name="name">
                </div>
            </div>
            
            <div class="mb-3 form-check ">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">by clicking submit you agree to <a href="">the terms and conditions</a></label>
            </div>
            <button type="submit" class="btn btn-primary col-12" name="request_call">SUBMIT</button> 
        </form>
        <hr>
        <div class="row">
                <p class="d-flex justify-content-center infoo">more info</p>
        </div>
        <div class="container">
            <a href="{{route('AddToFavs',$ad_info->id)}}" class="more-opt"><i class="far fa-heart faa-edit"></i>add this ad to your favorites</a>
            <a href="{{route('report',$ad_info->id)}}" class="more-opt"><i class="fas fa-exclamation-triangle faa-edit"></i>report this ad</a>
            <a href="" class="more-opt"><i class="fas fa-plus-square faa-edit"></i>more ads by</a>
            

        </div>
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