@extends('layout.layout')
@section('title', 'New Warehouse')
@section('content')

<div class="container">
    <form action="/warehouses" method="post" class="create">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
        </div>
        <div class="mb-3">
            <label for="employees" class="form-label">Employees</label>
            @if(count($employees) > 0)  
                <select id="employees" name="employees[]" class="form-select" aria-label="Select Employees" multiple>          
                    @foreach($employees as $employee)
                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                    @endforeach
                </select>
            @else
            <p>NO DATA. PLEASE ADD EMPLOYEE!</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select id="status" name="status" class="form-select" aria-label="Select Status">
                <option selected>Active</option>
                <option>Inactive</option>
            </select>
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