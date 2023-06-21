@extends('layout.layout')
@section('title', 'Edit Warehouse')
@section('content')

<form action="/warehouses/{{$warehouse->id}}" method="post" class="edit">
    {{ method_field('PUT') }}
    @csrf
    <div class="row">
        <div class="col-6 mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" value="{{$warehouse->name}}" name="name" placeholder="Enter Name">
        </div>

        <div class="col-6 mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="phone" value="{{$warehouse->phone}}" name="phone" placeholder="Enter Phone">
        </div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" value="{{$warehouse->email}}" name="email" placeholder="Enter Email">
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address:</label>
        <input type="text" class="form-control" id="address" value="{{$warehouse->address}}" name="address" placeholder="Enter Address">
    </div>

    <div class="row">
        <div class="col-8 mb-3">
            <label for="employees" class="form-label">Employees:</label>
            @if(count($employees) > 0)  
                <select id="employees" name="employees[]" class="form-select" aria-label="Select Employees" multiple>          
                    @foreach($employees as $employee)
                        <option {{ (in_array($employee->id, $warehouse->employees->pluck('id')->toArray()))?"selected":""}} value="{{$employee->id}}">{{$employee->name}}</option>
                    @endforeach
                </select>
            @else
                <p>NO DATA. PLEASE ADD EMPLOYEE!</p>
            @endif
        </div>

        <div class="col-4 mb-3">
            <label for="status" class="form-label">Status:</label>
            <select id="status" name="status" class="form-select" aria-label="Select Status">
                <option value="Active" {{$warehouse->status === 'Active' ? 'selected' : ''}}>Active</option>
                <option value="Inactive" {{$warehouse->status === 'Inactive' ? 'selected' : ''}}>Inactive</option>
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