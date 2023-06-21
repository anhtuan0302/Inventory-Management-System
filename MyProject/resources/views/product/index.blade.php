@extends('layout.layout')
@section('title', 'Product')
@section('content')

<div class="table-responsive">
    @if ($products->isEmpty())
        <div style="text-align:center; padding: 100px;">
            <p style=>{{$message}}</p>
            <a href="products/create" class="btn btn-primary" style="background:#7266ee">Add Product</a>
        </div>
    @else
    <div class="text-left" style="padding-bottom: 20px">
        <a href="products/create"><button type="submit" class="btn btn-success">Add Product</button></a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-head" style="background:#7266ee; font-size:15px; color:#FFFFFF; font-weight:lighter">
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Category</th>
                <th>Supplier</th>
                <th>Warehouse</th>
                <th>Price</th>
                <th>Unit</th>
                <th>In Stock</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-light">
                  @foreach ($products as $product)
                  <tr class="table-primary" >
                    <td>
                        <img src="{{url("/upload/".$product->photo)}}" class="img-fluid rounded-top" alt="" style="max-width: 50px;
                        height: auto;">
                    </td>
                    <td>
                        <a href="{{url("/products/".$product->id)}}"  style="color:#7266ee">
                        {{$product->name}}
                        </a>
                    </td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->supplier->name}}</td>
                    <td>{{$product->warehouse->name}}</td>
                    <td>${{$product->price}}</td>
                    <td>{{$product->unit}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->status}}</td>
                    <td>
                      <a href="{{url("/products/".$product->id."/edit")}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                      <form action="{{url("/peoducts/".$product->id)}}" method="post" class="d-inline">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');"><i class="bi bi-trash3"></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
    </table>
    @endif
</div>
@endsection