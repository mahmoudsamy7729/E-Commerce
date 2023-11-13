@extends('layouts.master')
@section('title','update')
@section('css_file')
    {{asset('css/post_ad.css')}}
@endsection
@section('content')
<div class="row d-flex justify-content-center mtt">
    <div class="col-12 col-sm-9 col-md-6">
        <form class="form-container" action="{{ route('update_ad') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col logo d-flex justify-content-center" >
                    <span>TAN</span><span>GO</span>
                </div>
            <hr>
            <div class="form-group row mb-3">
                <label class="col-sm-2 col-form-label">title</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="TITLE" name="title">
                @error('title')
                    <span class="error"> {{$message}} </span>
                @enderror
                </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-sm-2 col-form-label">price</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" placeholder="PRICE" name="price">
                </div>
            </div>
            <hr>
            <div class="form-group row mb-3">
                <label class="col-sm-2 col-form-label">description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" placeholder="DESCRIPTION" name="description"></textarea>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-sm-2 col-form-label" >photo</label>
                <div class="col-sm-10">
                    <input type="file" name="photo" >
                </div>
            </div>
            <hr>
            <div class="form-group row mb-3">
                <label class="col-sm-2 col-form-label" >location</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="LOCATION" name="location">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary col-12" name="post">SUBMIT</button> 
        </form>
    </div>
</div>
</div>
@endsection
