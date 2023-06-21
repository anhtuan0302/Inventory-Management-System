@extends('layout.layout')
@section('title', 'New User')
@section('content')

<div class="container">
    <form action="/users" method="post" class="create" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">User Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">User Photo:</label>
            <input type="file" class="form-control" id="photo" name="photo" placeholder="Choose Photo">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">User Role:</label>
            <select id="role" name="role" class="form-select" aria-label="Select Role">
                <option selected>User</option>
                <option>Admin</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">User Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">User Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
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