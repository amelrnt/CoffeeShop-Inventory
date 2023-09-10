<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.table.role', compact('roles'));
    }

    public function create()
    {
        return view('admin.form.role');
    }

    public function store(Request $request)
    {
        // Validate and save the new Role data
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Role::create($data);

        return redirect()->route('role')->with('success', 'role added successfully.');
    }

    public function edit(Role $Role)
    {
        return view('role.edit', compact('Role'));
    }

    public function update(Request $request, Role $Role)
    {
        // Validate and update the Role data
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $Role->update($data);

        return redirect()->route('role')->with('success', 'role updated successfully.');
    }
}
