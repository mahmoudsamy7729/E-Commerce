<div class="container form-container mtt mb-3">
    <div class="row">
        <div class="col headline d-flex justify-content-center"><h4>PREMIUM ADS</h4></div>
    </div>
    <div class="row">
        @foreach ($ads as $ad)
        <div class="col-12 col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
            <div class="card">
                <img src="{{asset("uploads/$ad->photo")}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title title-edit"><a href="{{route('ad',$ad->id)}}">{{$ad->title}}</a></h5>
                    <hr>
                    <div class="row">
                            <p class="col-7 col-md-7 card-text textt-edit border-end"><i class="fas fa-list faa-edit"></i><a href="#">{{$ad->category}}</a></p>
                            <p class="col-5 col-md-5 card-text textt-edit"><i class="col fas fa-clock faa-edit"></i>2 days ago</p>
                    </div>
                    <div class="row mb-3">
                        <p class="col card-text textt-edit"><i class="fas fa-map-marker-alt faa-edit"></i><a href="">{{$ad->location}}</a></p>
                    </div>
                    <hr>
                    <a href="{{route('ad',$ad->id)}}" class="btn btn-primary col-12">{{ $ad->price }} EGP</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>