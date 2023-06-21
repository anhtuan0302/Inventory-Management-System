<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Salary;
use App\Models\Employee;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $salaries = Salary::all();

        if ($salaries->isEmpty()) {
            $message = 'NO DATA. PLEASE ADD SALARY!';
        }
        else{
            $message = null;
        }

        return view('salary.index', compact('salaries', 'message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $employees = Employee::all();
        return view('salary.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $salary = new Salary;
        $salary->employee_id = $request->employee;
        $salary->month = $request->month;
        $salary->year = $request->year;

        $employee = Employee::find($request->employee);
        if ($employee) {
            $position = $employee->position;
            if ($position === 'Intern') {
                $salary->wage = 100;
            }
        }

        $salary->workday = $request->workday;
        $salary->bonus = $request->bonus;
        $salary->total = $salary->wage * $request->workday + $request->bonus;

        $salary->save();

        return redirect('/salaries');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $salary = Salary::find($id);
        return view('salary.show', compact('salary'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $salary = Salary::find($id);
        $employees = Employee::all();
        return view('salary.edit', compact('salary', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salary = Salary::find($id);
        $salary->employee_id = $request->employee;
        $salary->month = $request->month;
        $salary->year = $request->year;
        $salary->workday = $request->workday;
        $salary->bonus = $request->bonus;
        $salary->total = $request->total;
        $salary->save();

        return redirect('/salaries');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salary = Salary::find($id);
        $salary->delete();

        return redirect('/salaries');
    }
}
