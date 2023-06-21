@extends('layout.layout')
@section('title', 'Category Details')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$category->name}}</h4>
            <p class="card-text">Description: {{$category->description}}</p>
        </div>
    </div>
@endsection