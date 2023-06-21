@extends('layout.layout')
@section('title', 'Salaries')
@section('content')

    <div class="table-responsive">
        @if ($salaries->isEmpty())
            <div style="text-align:center; padding: 100px;">
                <p style=>{{ $message }}</p>
                <a href="salaries/create" class="btn btn-primary" style="background:#7266ee">Add Product</a>
            </div>
        @else
            <div class="text-left" style="padding-bottom: 20px">
                <a href="salaries/create"><button type="submit" class="btn btn-success">Add Product</button></a>
            </div>
            <table class="table table-striped table-hover">
                <thead class="table-head" style="background:#7266ee; font-size:15px; color:#FFFFFF; font-weight:lighter">
                    <tr>
                        <th>Name</th>
                        <th>Month</th>
                        <th>Year</th>
                        <th>Wage/Day</th>
                        <th>Workday</th>
                        <th>Bonus</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($salaries as $salary)
                        <tr class="table-primary">
                            <td>
                                <a href="{{ url('/employees/' . $salary->employee->id) }}" style="color:#7266ee">
                                    {{ $salary->employee->name }} - {{$salary->employee->position}}
                                </a>
                            </td>
                            <td>{{ $salary->month }}</td>
                            <td>{{ $salary->year }}</td>
                            <td>${{ $salary->wage }}</td>
                            <td>{{ $salary->workday }}</td>
                            <td>${{ $salary->bonus }}</td>
                            <td>${{ $salary->total }}</td>
                            <td>
                                <a href="{{ url('/salaries/' . $salary->id . '/edit') }}" class="btn btn-warning"><i
                                        class="bi bi-pencil-square"></i></a>
                                <form action="{{ url('/salaries/' . $salary->id) }}" method="post" class="d-inline">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure?');"><i class="bi bi-trash3"></i></button>
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
    </div>

@endsection
