@extends('layout.layout')
@section('title', 'User')
@section('content')

<div class="table-responsive">
    @if ($users->isEmpty())
        <div style="text-align:center; padding: 100px;">
          <p>{{$message}}</p>
          <a href="users/create" class="btn btn-primary" style="background:#7266ee">Add User</a>
        </div>
    @else
    <div class="text-left" style="padding-bottom: 20px">
        <a href="users/create"><button type="submit" class="btn btn-success">Add User</button></a>
    </div>
    <table class="table table-striped table-hover">
      <thead class="table-head" style="background:#7266ee; font-size:15px; color:#FFFFFF; font-weight:lighter">
        <tr>
          <th style="width: 15%">Avatar</th>
          <th style="width: 25%">Name</th>
          <th style="width: 30%">Email</th>
          <th style="width: 20%">Role</th>
          <th style="width: 10%">Action</th>
        </tr>
      </thead>

      <tbody class="table-light">
        @foreach ($users as $user)
          <tr class="table-primary" >
            <td>
              <img src="{{url("/upload/".$user->photo)}}" class="img-fluid rounded-top" alt="" style="max-width: 50px; height: auto;">
            </td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>
              <a href="{{url("/users/".$user->id."/edit")}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                
              <form action="{{url("/users/".$user->id)}}" method="post" class="d-inline"> {{ method_field('DELETE') }}
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
