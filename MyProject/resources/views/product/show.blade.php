@extends('layout.layout')
@section('title', 'Product Details')
@section('content')

<div class="container" style="padding: 20px 100px 0px 100px">
    <div class="row">
        <div class="col-4">
            <img src="{{url("/upload/".$product->photo)}}" class="img-fluid rounded-top" alt="" style="max-width: 250px; height: auto;">
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title pb-3">{{$product->name}}</h4>
                    <p class="card-text">Category: {{$product->category->name}}</p>
                    <p class="card-text">Supplier: {{$product->supplier->name}}</p>
                    <p class="card-text">Warehouse: {{$product->warehouse->name}}</p>
                    <p class="card-text">Price: ${{$product->price}}</p>
                    <p class="card-text">Unit: {{$product->unit}}</p>
                    <p class="card-text">Inventory: {{$product->quantity}}</p>
                    <p class="card-text">Status: {{$product->status}}</p>
                    <p><a href="{{url("/products/".$product->id."/edit")}}"><button type="submit" class="btn btn-success">Edit</button></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection