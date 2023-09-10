<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Inventory</h3>
            </div>
        </div>
    </x-slot>

    <section class="section">
        <form method="post" action="{{ route('inventory.store') }}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <br><br>
            <label for="quantity_on_hand">Qty On Hand:</label>
            <input type="number" name="quantity_on_hand" id="quantity_on_hand" required>
            <br><br>
            <label for="lead_time">Lead Time (In Days):</label>
            <input type="number" name="lead_time" id="lead_time" required>
            <br><br>
            <label for="ordering_cost">Ordering Cost</label>
            <input type="number" name="ordering_cost" id="ordering_cost" required>
            <br><br>
            <label for="holding_cost">Holding Cost</label>
            <input type="number" name="holding_cost" id="holding_cost" required>
            <br><br>
            <label for="unit_price">Unit Price</label>
            <input type="number" name="unit_price" id="unit_price" required>
            <br><br>
            <label for="supplier_id">Supplier:</label>
            <select id="supplier_id" name="supplier_id" class="form-control" required>
                <option value="">Select Supplier</option>
                @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endforeach
            </select>
            <button type="submit">Add Inventory</button>
        </form>
    </section>


</x-app-layout>

