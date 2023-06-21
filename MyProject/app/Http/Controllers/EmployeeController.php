<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $employees = Employee::all();

        if ($employees->isEmpty()) {
            $message = 'NO DATA. PLEASE ADD EMPLOYEE!';
        }
        else{
            $message = null;
        }

        return view('employee.index', compact('employees', 'message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->position = $request->position;
        $employee->status = $request->status;
        $employee->save();
        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $employee = Employee::find($id);
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->position = $request->position;
        $employee->status = $request->status;
        $employee->save();
        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }
        
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employees');
    }
}
