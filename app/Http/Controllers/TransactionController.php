<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('admin.table.transaction', compact('transactions'));
    }

    public function create()
    {
        return view('admin.form.transaction');
    }

    public function store(Request $request)
    {
        $transaction_last = Transaction::latest()->first();
        $data = $request->validate([
            'amount' => 'required|numeric',
            'type' => 'required',
            'date' => 'required',
        ]);

        $type = $data['type'];
        $id = $transaction_last['id'] or "0";

        // Create a reference number format (e.g., "S-00001" for sales and "P-00001" for purchases)
        $prefix = strtoupper(substr($type, 0, 1)); // Get the first letter of the type
        $formattedId = str_pad($id, 5, '0', STR_PAD_LEFT); // Pad the ID with leading zeros
        $referenceNumber = $prefix . '-' . $formattedId;

        $data['reference_number'] = $referenceNumber;

        Transaction::create($data);

        return redirect()->route('transaction')->with('success', 'Transaction added successfully.');
    }

    public function edit(Transaction $Transactions)
    {
        return view('Transaction.edit', compact('transactions'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $data = $request->validate([
            'amount' => 'required|numeric',
            'type' => 'required',
            'date' => 'required',
        ]);

        $transaction->update($data);

        return redirect()->route('transaction')->with('success', 'Transaction updated successfully.');
    }
}
