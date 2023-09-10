<x-app-layout>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Inventory List</h3>
                {{-- <p class="text-subtitle text-muted">This is the products page.</p> --}}
            </div>
        </div>
    </x-slot>


    <a href="{{ route('inventory.create') }}"><button type="button" class="btn btn-primary">Add inventory</button></a>
    <br><br>
    <section class="section">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Inventory Name</th>
                <th scope="col">QTY on Hand</th>
                <th scope="col">Reorder Point</th>
                <th scope="col">Lead Time</th>
                <th scope="col">Ordering Cost</th>
                <th scope="col">Holding Cost</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Supplier Name</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->id }}</td>
                    <td>{{ $inventory->name }}</td>
                    <td>{{ $inventory->quantity_on_hand }}</td>
                    <td>{{ $inventory->reorder_point }}</td>
                    <td>{{ $inventory->lead_time }} Days</td>
                    <td>Rp {{ $inventory->ordering_cost }}</td>
                    <td>Rp {{ $inventory->holding_cost }}</td>
                    <td>Rp {{ $inventory->unit_price }}</td>
                    <td>{{ $inventory->supplier->name }}</td>
                    <td>
                        <a href="{{ route('inventory.edit', $inventory
                        ) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </section>


</x-app-layout>




