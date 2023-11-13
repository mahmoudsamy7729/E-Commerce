@foreach ($reports as $report)
<div class="container ps-5 pt-3 pb-3  bg-edit">
    <div class="row font-color">
        <div class="col-4 me-5 me-md-0 border-end" style="overflow: hidden">
            <h6 style="overflow: hidden">{{$report->ad_id}}</h6>
        </div>
        <div class="col-4 d-none d-md-block border-end">
            <h6><a href="{{route('ad',$report->ad_id)}}" class="del-a"><i class="fas fa-eye me-2"></i>VIEW AD</a></h6>
        </div>  
        <div class="col-3 ms-auto">
            <h6><a href="{{route('delete-ad', $report->ad_id)}}" class="del-a"><i class="fas fa-trash-alt me-2"></i>DELETE AD</a></h6>
        </div>
    </div>
</div>     
@endforeach