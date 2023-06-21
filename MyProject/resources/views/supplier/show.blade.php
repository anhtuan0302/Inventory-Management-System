@extends('layout.layout')
@section('title', 'Supplier Details')
@section('content')

<div class="container" style="padding: 20px 100px 0px 100px">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title pb-3">{{$supplier->name}}</h4>
            <p class="card-text">Phone: {{$supplier->phone}}</p>
            <p class="card-text">Email: {{$supplier->email}}</p>
            <p class="card-text">Address: {{$supplier->address}}</p>
        </div>
    </div>
</div>

@endsection