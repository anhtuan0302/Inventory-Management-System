@extends('layout.layout')
@section('title', 'Edit Category')
@section('content')
<form action="/categories/{{$category->id}}" method="post" class="edit">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" value="{{$category->name}}" name="name" placeholder="Enter Name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" value="{{$category->description}}" name="description" placeholder="Enter Description">
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