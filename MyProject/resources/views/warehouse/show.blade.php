@extends('layout.layout')
@section('title', 'Warehouse Details')
@section('content')

<div class="container" style="padding: 20px 100px 0px 100px">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title pb-3">{{$warehouse->name}}</h4>
            <p class="card-text">Phone: {{$warehouse->phone}}</p>
            <p class="card-text">Email: {{$warehouse->email}}</p>
            <p class="card-text">Address: {{$warehouse->address}}</p>
            <p class="card-text">Employees: 
                @foreach($warehouse->employees as $employee)
                    {{$employee->name}}
                    @if (!$loop->last)
                        , 
                    @endif
                @endforeach
            <p class="card-text">Status: {{$warehouse->status}}</p>
        </div>
    </div>
</div>

@endsection