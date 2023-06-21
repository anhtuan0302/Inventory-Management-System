@extends('layout.layout')
@section('title', 'New Category')
@section('content')

<div class="container">
    <form action="/categories" method="post" class="create">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label for="Description" class="form-label">Description:</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
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