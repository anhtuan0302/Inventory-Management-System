@extends('layout.layout')
@section('title', 'Edit Supplier')
@section('content')
<form action="/suppliers/{{$supplier->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Supplier Name</label>
        <input type="text" class="form-control" id="name" value="{{$supplier->name}}" name="name" placeholder="Supplier Name">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Supplier Phone</label>
        <input type="text" class="form-control" id="phone" value="{{$supplier->phone}}" name="phone" placeholder="Supplier Phone">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Supplier Email</label>
        <input type="text" class="form-control" id="email" value="{{$supplier->email}}" name="email" placeholder="Supplier Email">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Supplier Address</label>
        <input type="text" class="form-control" id="address" value="{{$supplier->address}}" name="address" placeholder="Supplier Address">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection