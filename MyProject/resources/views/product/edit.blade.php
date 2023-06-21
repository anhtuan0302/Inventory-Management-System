@extends('layout.layout')
@section('title', 'Edit Product')
@section('content')

<form action="/products/{{$product->id}}" method="post" class="edit" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    @csrf
    <div class="row">
        <div class="col-6 mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" value="{{$product->name}}" name="name" placeholder="Enter Name">
        </div>
        <div class="col-6 mb-3">
            <label for="category" class="form-label">Category:</label>
            <select id="category" name="category" class="form-select" aria-label="Select Category">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="mb-3">
        <label for="photo" class="form-label">Photo:</label>
        <input type="file" class="form-control" id="photo" name="photo" placeholder="Choose Photo">
    </div>

    <div class="row">
        <div class="col-6 mb-3">
            <label for="supplier" class="form-label">Supplier:</label>
            <select id="supplier" name="supplier" class="form-select" aria-label="Select Supplier">
                @foreach($suppliers as $supplier)
                    <option value="{{$supplier->id}}" {{$supplier->id == $product->supplier_id ? 'selected' : ''}}>{{$supplier->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6 mb-3">
            <label for="warehouse" class="form-label">Warehouse:</label>
            <select id="warehouse" name="warehouse" class="form-select" aria-label="Select Warehouse">
                @foreach($warehouses as $warehouse)
                    <option value="{{$warehouse->id}}" {{$warehouse->id == $product->warehouse_id ? 'selected' : ''}}>{{$warehouse->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-6 mb-3">
            <label for="quantity" class="form-label">Inventory:</label>
            <input type="number" class="form-control" id="quantity" value="{{$product->quantity}}" name="quantity" min="0" placeholder="Enter Inventory">
        </div>
        <div class="col-6 mb-3">
            <label for="unit" class="form-label">Unit:</label>
            <select id="unit" name="unit" class="form-select" aria-label="Select Unit">
                <option value="Bag" {{$product->unit == 'Bag' ? 'selected' : ''}}>Bag</option>
                <option value="Bottle" {{$product->unit == 'Bottle' ? 'selected' : ''}}>Bottle</option>
                <option value="Carton" {{$product->unit == 'Carton' ? 'selected' : ''}}>Carton</option>
                <option value="Jar" {{$product->unit == 'Jar' ? 'selected' : ''}}>Jar</option>
                <option value="Roll" {{$product->unit == 'Roll' ? 'selected' : ''}}>Roll</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-6 mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" class="form-control" id="price" value="{{$product->price}}" name="price" min="0" placeholder="Enter Price">
        </div>
        <div class="col-6 mb-3">
            <label for="status" class="form-label">Status:</label>
            <select id="status" name="status" class="form-select" aria-label="Select Status">
                <option value="Active" {{$product->status == 'Active' ? 'selected' : ''}}>Active</option>
                <option value="Inactive" {{$product->status == 'Inactive' ? 'selected' : ''}}>Inactive</option>
            </select>
        </div>
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