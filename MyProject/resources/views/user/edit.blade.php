@extends('layout.layout')
@section('title', 'Edit User')
@section('content')
<form action="/users/{{$user->id}}" method="post" class="edit" enctype="multipart/form-data">
    {{ method_field('PUT') }}
    @csrf
    <div class="row">
        <div class="col-8 mb-3">
            <label for="name" class="form-label">User Name:</label>
            <input type="text" class="form-control" id="name" value="{{$user->name}}" name="name" placeholder="Enter Name">
        </div>

        <div class="col-4 mb-3">
            @php
                $roles = ['User', 'Admin'];
            @endphp
            @if(auth()->user()->role === 'Admin')
                <label for="role" class="form-label">User Role:</label>
                <select id="role" name="role" class="form-select" aria-label="Select Role">
                    @foreach ($roles as $role)
                        <option {{ ($user->role == $role)?"selected":""}} value="{{$role}}">{{$role}}</option>
                    @endforeach
                </select>
            @else
                <label for="role" class="form-label">User Role:</label>
                <select id="role" name="role" class="form-select" aria-label="Select Role">
                    <option {{ ($user->role == 'User')?"selected":""}} value="User">User</option>
                </select>
            @endif
        </div>    
    </div>
    
    <div class="mb-3">
        <label for="photo" class="form-label">User Photo:</label>
        <input type="file" class="form-control" id="photo" name="photo" placeholder="Choose Photo">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">User Email:</label>
        <input type="email" class="form-control" id="email" value="{{$user->email}}" name="email" placeholder="Enter Email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">User Password:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary my-3" style="background:#7266ee">Submit</button>
    </div>
    @if(isset($message))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif
    </div>
</form>
@endsection

<style>
    .edit {
         padding-right: 280px;
         padding-left: 280px;
     }
 </style>