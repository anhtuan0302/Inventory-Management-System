@extends('layout.layout')
@section('title', 'Edit Salary')
@section('content')

<form action="/salaries/{{$salary->id}}" method="post" class="edit">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="employee" class="form-label">Employee:</label>
        <select id="employee" name="employee" class="form-select" aria-label="Select Employee">
            @foreach($employees as $employee)
            <option value="{{$employee->id}}" {{$employee->id == $salary->employee_id ? 'selected' : ''}}>{{$employee->name}} - {{$employee->position}} - {{$employee->status}}</option>
            @endforeach
        </select>
    </div>
    <div class="row">
        <div class="col-6 mb-3">
            <label for="month" class="form-label">Month:</label>
            <select id="month" name="month" class="form-select" aria-label="Select Month">
                <option value="January" {{$salary->month == 'January' ? 'selected' : ''}}>January</option>
                <option value="February" {{$salary->month == 'February' ? 'selected' : ''}}>February</option>
                <option value="March" {{$salary->month == 'March' ? 'selected' : ''}}>March</option>
                <option value="April" {{$salary->month == 'April' ? 'selected' : ''}}>April</option>
                <option value="May" {{$salary->month == 'May' ? 'selected' : ''}}>May</option>
                <option value="June" {{$salary->month == 'June' ? 'selected' : ''}}>June</option>
                <option value="July" {{$salary->month == 'July' ? 'selected' : ''}}>July</option>
                <option value="August" {{$salary->month == 'August' ? 'selected' : ''}}>August</option>
                <option value="September" {{$salary->month == 'September' ? 'selected' : ''}}>September</option>
                <option value="October" {{$salary->month == 'October' ? 'selected' : ''}}>October</option>
                <option value="November" {{$salary->month == 'November' ? 'selected' : ''}}>November</option>
                <option value="December" {{$salary->month == 'December' ? 'selected' : ''}}>December</option>
            </select>
        </div>

        <div class="col-6 mb-3">
            <label for="year" class="form-label">Year:</label>
            <select id="year" name="year" class="form-select" aria-label="Select Year">
                <option value="2023" {{$salary->year == '2023' ? 'selected' : ''}}>2023</option>
                <option value="2022" {{$salary->year == '2022' ? 'selected' : ''}}>2022</option>
                <option value="2024" {{$salary->year == '2024' ? 'selected' : ''}}>2024</option>
            </select>
            </select>
        </div>
    </div>

    <div class="mb-3">
        <label for="workday" class="form-label">Workday:</label>
        <input type="number" class="form-control" id="workday" value="{{$salary->workday}}" name="workday" placeholder="Workday">
    </div>

    <div class="mb-3">
        <label for="bonus" class="form-label">Bonus:</label>
        <input type="number" class="form-control" id="bonus" value="{{$salary->bonus}}" name="bonus" placeholder="Bonus">
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