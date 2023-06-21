@extends('layout.layout')
@section('title', 'Edit Employee')
@section('content')
<form action="/employees/{{$employee->id}}" method="post" class="edit">
    {{ method_field('PUT') }}
    @csrf
    <div class="row">
        <div class="col-6 mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" value="{{$employee->name}}" name="name" placeholder="Employee Name">
        </div>
        <div class="col-6 mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="phone" value="{{$employee->phone}}" name="phone" placeholder="Employee Phone">
        </div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="text" class="form-control" id="email" value="{{$employee->email}}" name="email" placeholder="Employee Email">
    </div>

    <div class="row">
        <div class="mb-3">
            <label for="position" class="form-label">Position:</label>
            <select id="position" name="position" class="form-select" aria-label="Select Position">
                <option value="Intern" {{$employee->position === 'Intern' ? 'selected' : ''}}>Intern</option>
                <option value="Junior" {{$employee->position === 'Junior' ? 'selected' : ''}}>Junior</option>
                <option value="Senior" {{$employee->position === 'Senior' ? 'selected' : ''}}>Senior</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select id="status" name="status" class="form-select" aria-label="Select Status">
                <option value="Active" {{$employee->status === 'Active' ? 'selected' : ''}}>Active</option>
                <option value="Inactive" {{$employee->status === 'Inactive' ? 'selected' : ''}}>Inactive</option>
            </select>
        </div>
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