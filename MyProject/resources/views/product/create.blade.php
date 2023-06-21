@extends('layout.layout')
@section('title', 'New Product')
@section('content')

<div class="container">
    <form action="/products" method="post" class="create" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo" placeholder="Author Photo">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select id="category" name="category" class="form-select" aria-label="Select Category">
                <option selected>Please choose one</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="supplier" class="form-label">Supplier</label>
            <select id="supplier" name="supplier" class="form-select" aria-label="Select Supplier">
                <option selected>Please choose one</option>
                @foreach($suppliers as $supplier)
                <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="warehouse" class="form-label">Warehouse</label>
            <select id="warehouse" name="warehouse" class="form-select" aria-label="Select Warehouse">
                <option selected>Please choose one</option>
                @foreach($warehouses as $warehouse)
                <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" placeholder="Enter Quantity">
            </div>
            <div class="col-6 mb-3">
                <label for="unit" class="form-label">Unit</label>
                <input type="text" class="form-control" id="unit" name="unit" placeholder="Enter Unit">
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price">
            </div>
            <div class="col-6 mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" name="status" class="form-select" aria-label="Select Status">
                    <option selected>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary my-3" style="background:#7266ee">Submit</button>
        </div>
    </form>
</div>
@endsection

<style>
   .create {
        padding-right: 280px;
        padding-left: 280px;
    }
</style>