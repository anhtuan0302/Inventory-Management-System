@extends('layout.layout')
@section('title', 'Employee')
@section('content')

<div class="table-responsive">
    @if ($employees->isEmpty())
        <div style="text-align:center; padding: 100px;">
            <p style=>{{$message}}</p>
            <a href="employees/create" class="btn btn-primary" style="background:#7266ee">Add Employee</a>
        </div>
    @else
    <div class="text-left" style="padding-bottom: 20px">
        <a href="employees/create"><button type="submit" class="btn btn-success">Add Employee</button></a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-head" style="background:#7266ee; font-size:15px; color:#FFFFFF; font-weight:lighter">
            <tr>
                <th style="width: 18%">Name</th>
                <th style="width: 18%">Phone</th>
                <th style="width: 24%">Email</th>
                <th style="width: 15%">Position</th>
                <th style="width: 15%">Status</th>
                <th style="width: 10%">Action</th>
            </tr>
            </thead>
            <tbody class="table-light">
                  @foreach ($employees as $employee)
                  <tr class="table-primary" >
                    <td>
                      <a href="{{url("/employees/".$employee->id)}}"  style="color:#7266ee">
                      {{$employee->name}}
                      </a>
                    </td>
                    <td>{{$employee->phone}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->position}}</td>
                    <td>
                        @if($employee->status === 'Active')
                          <span class="badge bg-success">Active</span>
                        @elseif($employee->status === 'Inactive')
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                    </td>
                    <td>
                      <a href="{{url("/employees/".$employee->id."/edit")}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                      <form action="{{url("/employees/".$employee->id)}}" method="post" class="d-inline">
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