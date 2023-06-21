@extends('layout.layout')
@section('title', 'Employee Details')
@section('content')

<div class="container" style="padding: 20px 100px 0px 100px">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title pb-3">{{$employee->name}}</h4>
            <p class="card-text">Phone: {{$employee->phone}}</p>
            <p class="card-text">Email: {{$employee->email}}</p>
            <p class="card-text">Position: {{$employee->position}}</p>
            <p class="card-text">Status: {{$employee->status}}</p>
        </div>
    </div>
</div>
@endsection