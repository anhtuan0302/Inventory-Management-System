@extends('layout.layout')
@section('title', 'Warehouse')
@section('content')

<div class="table-responsive">
    @if ($warehouses->isEmpty())
        <div style="text-align:center; padding: 100px;">
            <p style=>{{$message}}</p>
            <a href="warehouses/create" class="btn btn-primary" style="background:#7266ee">Add Warehouse</a>
        </div>
    @else
    <div class="text-left" style="padding-bottom: 20px">
        <a href="warehouses/create"><button type="submit" class="btn btn-success">Add Warehouse</button></a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-head" style="background:#7266ee; font-size:15px; color:#FFFFFF">
            <tr>
                <th style="width: 10%">Name</th>
                <th style="width: 15%">Phone</th>
                <th style="width: 20%">Email</th>
                <th style="width: 20%">Address</th>
                <th style="width: 15%">Employee</th>
                <th style="width: 10%">Status</th>
                <th style="width: 10%">Action</th>
            </tr>
            </thead>
            <tbody class="table-light">
                  @foreach ($warehouses as $warehouse)
                  <tr class="table-primary" >
                    <td>
                      <a href="{{url("/warehouses/".$warehouse->id)}}"  style="color:#7266ee">
                      {{$warehouse->name}}
                      </a>
                    </td>
                    <td>{{$warehouse->phone}}</td>
                    <td>{{$warehouse->email}}</td>
                    <td>{{$warehouse->address}}</td>
                    <td>
                        @foreach($warehouse->employees as $employee)
                        <a href="{{url("/employees/".$employee->id)}}"  style="color:#7266ee">{{$employee->name}}<br></a>
                        @endforeach
                    </td>
                    <td>
                        @if($warehouse->status === 'Active')
                          <span class="badge bg-success">Active</span>
                        @elseif($warehouse->status === 'Inactive')
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                    </td>
                    <td>
                      <a href="{{url("/warehouses/".$warehouse->id."/edit")}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                      <form action="{{url("/warehouses/".$warehouse->id)}}" method="post" class="d-inline">
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