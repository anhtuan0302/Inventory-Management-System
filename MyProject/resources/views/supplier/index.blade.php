@extends('layout.layout')
@section('title', 'Supplier')
@section('content')

<div class="table-responsive">
    @if ($suppliers->isEmpty())
        <div style="text-align:center; padding: 100px;">
            <p style=>{{$message}}</p>
            <a href="suppliers/create" class="btn btn-primary" style="background:#7266ee">Add Supplier</a>
        </div>
    @else
    <div class="text-left" style="padding-bottom: 20px">
        <a href="suppliers/create"><button type="submit" class="btn btn-success">Add Supplier</button></a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-head" style="background:#7266ee; font-size:15px; color:#FFFFFF">
            <tr>
                <th style="width: 20%">Name</th>
                <th style="width: 20%">Phone</th>
                <th style="width: 25%">Email</th>
                <th style="width: 25%">Address</th>
                <th style="width: 10%">Action</th>
            </tr>
            </thead>
            <tbody class="table-light">
                  @foreach ($suppliers as $supplier)
                  <tr class="table-primary" >
                    <td>
                      <a href="{{url("/suppliers/".$supplier->id)}}"  style="color:#7266ee">
                      {{$supplier->name}}
                      </a>
                    </td>
                    <td>{{$supplier->phone}}</td>
                    <td>{{$supplier->email}}</td>
                    <td>{{$supplier->address}}</td>
                    <td>
                      <a href="{{url("/suppliers/".$supplier->id."/edit")}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                      <form action="{{url("/suppliers/".$supplier->id)}}" method="post" class="d-inline">
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