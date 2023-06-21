@extends('layout.layout')
@section('title', 'Edit Supplier')
@section('content')
<form action="/suppliers/{{$supplier->id}}" method="post" class="edit">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" value="{{$supplier->name}}" name="name" placeholder="Enter Name">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" value="{{$supplier->phone}}" name="phone" placeholder="Enter Phone">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" value="{{$supplier->email}}" name="email" placeholder="Enter Email">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" value="{{$supplier->address}}" name="address" placeholder="Enter Address">
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary my-3" style="background:#7266ee">Submit</button>
    </div>
</form>
@endsection
<style>
    .edit {
         padding-right: 280px;
         padding-left: 280px;
     }
</style>