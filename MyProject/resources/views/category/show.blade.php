@extends('layout.layout')
@section('title', 'Category Details')
@section('content')
<div class="container" style="padding: 20px 100px 0px 100px">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title pb-3">{{$category->name}}</h4>
            <p class="card-text">Description: {{$category->description}}</p>
        </div>
    </div>
</div>
@endsection