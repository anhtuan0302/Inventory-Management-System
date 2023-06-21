@extends('layout.layout')
@section('title', 'New Salary')
@section('content')

<div class="container">
    <form action="/salaries" method="post" class="create">
        @csrf
        <div class="mb-3">
            <label for="employee" class="form-label">Employee</label>
            <select id="employee" name="employee" class="form-select" aria-label="Select Employee">
                <option selected>Please choose one</option>
                @foreach($employees as $employee)
                <option value="{{$employee->id}}">{{$employee->name}} - {{$employee->position}} - {{$employee->status}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="month" class="form-label">Month</label>
            <select id="month" name="month" class="form-select" aria-label="Select Month">
                <option selected>Please choose one</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <select id="year" name="year" class="form-select" aria-label="Select Year">
                <option selected>2023</option>
                <option value="2023">2022</option>
                <option value="2023">2024</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="workday" class="form-label">Workday</label>
            <input type="number" class="form-control" id="workday" name="workday" placeholder="Workday">
        </div>
        <div class="mb-3">
            <label for="bonus" class="form-label">Bonus</label>
            <input type="number" class="form-control" id="bonus" name="bonus" placeholder="Bonus">
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