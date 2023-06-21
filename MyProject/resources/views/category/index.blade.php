@extends('layout.layout')
@section('title', 'Category')
@section('content')

<div class="table-responsive">
    @if ($categories->isEmpty())
        <div style="text-align:center; padding: 100px;">
            <p style=>{{$message}}</p>
            <a href="categories/create" class="btn btn-primary" style="background:#7266ee">Add Category</a>
        </div>
    @else
    <div class="text-left" style="padding-bottom: 20px">
        <a href="categories/create"><button type="submit" class="btn btn-success">Add Category</button></a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="table-head" style="background:#7266ee; font-size:15px; color:#FFFFFF">
            <tr>
                <th style="width: 40%">Name</th>
                <th style="width: 50%">Description</th>
                <th style="width: 10%">Action</th>
            </tr>
            </thead>
            <tbody class="table-light">
                  @foreach ($categories as $category)
                  <tr class="table-primary" >
                    <td>
                      <a href="{{url("/categories/".$category->id)}}"  style="color:#7266ee">
                      {{$category->name}}
                      </a>
                    </td>
                    <td>{{$category->description}}</td>
                    <td>
                      <a href="{{url("/categories/".$category->id."/edit")}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                      <form action="{{url("/categories/".$category->id)}}" method="post" class="d-inline">
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