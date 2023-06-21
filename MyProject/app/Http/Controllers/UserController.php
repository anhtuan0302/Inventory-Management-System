<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::check()) {
            return redirect('/login');
        }
        
        $users = User::all();
        if ($users->isEmpty()) {
            $message = 'NO DATA. PLEASE ADD USER!';
        }
        else{
            $message = null;
        }

        return view('user.index', compact('users', 'message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('public');
            $user->photo = substr($photo,strlen('public/'));
        }   else {
            if ($request->role=='Admin') {
                $user->photo = 'admin.png';
            } else {
                $user->photo = 'user.png';
            }
        }

        $user->role = $request->role;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = $request->password;
        } else {
            return back()->withErrors(['password' => 'The password field is required.'])->withInput();
        }

        $user->save();
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name = $request->name;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('public');
            $user->photo = substr($photo,strlen('public/'));
        } else {
            if ($request->role=='Admin') {
                $user->photo = 'admin.png';
            } else {
                $user->photo = 'user.png';
            }
        }

        $user->role = $request->role ?: 'User';;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        
        $message = 'Update Success!';

        return view('user.edit', compact('user', 'message'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!Auth::check()) {
            return redirect('/login');
        }

        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }
}
