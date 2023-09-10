<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Supplier;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::with('supplier')->get();
        return view('admin.table.inventory', compact('inventories'));
    }

    public function create()
    {
        // Retrieve suppliers from the database to populate the dropdown
        $suppliers = Supplier::all();

        return view('admin.form.inventory', compact('suppliers'));
    }

    public function store(Request $request)
    {
        // Validate and save the new Inventory data
        $data = $request->validate([
            'name' => 'required',
            'quantity_on_hand' => 'numeric', //TODO: change to readonly, 0 as default
            'lead_time' => 'required|numeric',
            'ordering_cost' => 'required|numeric',
            'holding_cost' => 'required|numeric',
            'unit_price' => 'required|numeric',
            'supplier_id' => 'required',
        ]);

        $data['reorder_point'] = "0";

        Inventory::create($data);

        return redirect()->route('inventory')->with('success', 'inventory added successfully.');
    }

    public function edit(Inventory $Inventory)
    {
        return view('inventory.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $Inventory)
    {
        // Validate and update the Inventory data
        $data = $request->validate([
            'name' => 'required',
            'quantity_on_hand' => 'required|numeric', //TODO: change to readonly, 0 as default
            'lead_time' => 'required|numeric',
            'ordering_cost' => 'required|numeric',
            'holding_cost' => 'required|numeric',
            'unit_price' => 'required|numeric',
            'supplier_id' => 'required',
        ]);

        $Inventory->update($data);

        return redirect()->route('inventory')->with('success', 'inventory updated successfully.');
    }
}
