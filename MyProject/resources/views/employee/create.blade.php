@extends('layout.layout')
@section('title', 'New Employee')
@section('content')

<div class="container">
    <form action="/employees" method="post" class="create">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Employee Name">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Employee Phone">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Employee Email">
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <select id="position" name="position" class="form-select" aria-label="Select Position">
                <option selected>Intern</option>
                <option>Trainee</option>
            </select>
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