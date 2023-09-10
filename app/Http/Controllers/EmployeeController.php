<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = User::all();
        return view('admin.table.employee', compact('employees'));
    }

    public function create()
    {
        return view('admin.form.employee');
    }

    public function store(Request $request)
    {
        // Validate and save the new user data
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        User::create($data);

        return redirect()->route('user')->with('success', 'Employee added successfully.');
    }

    public function edit(user $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validate and update the user data
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user->update($data);

        return redirect()->route('user')->with('success', 'Employee updated successfully.');
    }
}
