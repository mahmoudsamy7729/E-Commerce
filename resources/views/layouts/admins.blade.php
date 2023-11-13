@foreach ($admins as $admin)
<div class="container ps-5 pt-3 pb-3  bg-edit">
    <div class="row font-color">
        <div class="col-4 me-5 me-md-0 border-end">
            <h6>{{$admin->username}}</h6>
        </div>
        <div class="col-4 d-none d-md-block border-end">
            <h6>{{$admin->email}}</h6>
        </div>  
        <div class="col-1 border-end">
            <h6>{{$admin->id}}</h6>
        </div>
        <div class="col-3 ms-auto">
            <h6><a href="{{route('delete_user',$admin->id)}}" class="del-a"><i class="fas fa-trash-alt me-2"></i>DELETE</a></h6>
        </div>
    </div>
</div>     
@endforeach