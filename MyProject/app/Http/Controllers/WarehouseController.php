<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Employee;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $warehouses = Warehouse::all();

        if ($warehouses->isEmpty()) {
            $message = 'NO DATA. PLEASE ADD WAREHOUSE!';
        }
        else{
            $message = null;
        }

        return view('warehouse.index', compact('warehouses', 'message'));
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
        return view('warehouse.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $warehouse = new Warehouse;
        $warehouse->name = $request->name;
        $warehouse->address = $request->address;
        $warehouse->phone = $request->phone;
        $warehouse->email = $request->email;
        $warehouse->status = $request->status;

        $warehouse->save();

        $warehouse->employees()->attach($request->employees);
        
        return redirect('/warehouses');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $warehouse = Warehouse::find($id);
        return view('warehouse.show', compact('warehouse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $warehouse = Warehouse::find($id);
        $employees = Employee::all();
        return view('warehouse.edit', compact('warehouse', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $warehouse = Warehouse::find($id);
        $warehouse->name = $request->name;
        $warehouse->address = $request->address;
        $warehouse->phone = $request->phone;
        $warehouse->email = $request->email;
        $warehouse->status = $request->status;
        $warehouse->employees()->sync($request->employees);
        $warehouse->save();

        return redirect('/warehouses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $warehouse = Warehouse::find($id);
        $warehouse->delete();
        return redirect('/warehouses');
    }
}
