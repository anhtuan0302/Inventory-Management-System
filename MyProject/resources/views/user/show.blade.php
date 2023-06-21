@extends('layout.layout')
@section('title', 'Supplier Details')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$employee->name}}</h4>
            <p class="card-text">Phone: {{$employee->phone}}</p>
            <p class="card-text">Email: {{$employee->email}}</p>
            <p class="card-text">Position: {{$employee->position}}</p>
            <p class="card-text">Status: {{$employee->status}}</p>
        </div>
    </div>
@endsection