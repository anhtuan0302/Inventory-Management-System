@extends('layout.layout')
@section('title', 'User Details')
@section('content')

<div class="container" style="padding: 20px 100px 0px 100px">
    <div class="row">
        <div class="col-4">
            <img src="{{url("/upload/".$user->photo)}}" class="img-fluid rounded-top" alt="" style="max-width: 250px; height: auto;">
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title pb-3">{{$user->name}}</h4>
                    <p class="card-text">Role: {{$user->role}}</p>
                    <p class="card-text">Email: {{$user->email}}</p>
                    <p><a href="{{url("/users/".$user->id."/edit")}}"><button type="submit" class="btn btn-success">Edit</button></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection