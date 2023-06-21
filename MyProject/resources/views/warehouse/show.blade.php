@extends('layout.layout')
@section('title', 'Supplier Details')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$supplier->name}}</h4>
            <p class="card-text">Phone: {{$supplier->phone}}</p>
            <p class="card-text">Email: {{$supplier->email}}</p>
            <p class="card-text">Address: {{$supplier->address}}</p>
        </div>
    </div>
@endsection