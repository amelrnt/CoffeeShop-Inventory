<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.table.supplier', compact('suppliers'));
    }

    public function create()
    {
        return view('admin.form.supplier');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'other_info' => 'required',
        ]);

        Supplier::create($data);

        return redirect()->route('supplier')->with('success', 'Supplier added successfully.');
    }

    public function edit(Supplier $suppliers)
    {
        return view('supplier.edit', compact('suppliers'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'other_info' => 'required',
        ]);

        $supplier->update($data);

        return redirect()->route('supplier')->with('success', 'Supplier updated successfully.');
    }
}
