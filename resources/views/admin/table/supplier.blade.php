<x-app-layout>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Supplier List</h3>
                {{-- <p class="text-subtitle text-muted">This is the products page.</p> --}}
            </div>
        </div>
    </x-slot>


    <a href="{{ route('supplier.create') }}"><button type="button" class="btn btn-primary">Add Supplier</button></a>
    <br><br>
    <section class="section">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Supplier Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Other Info</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->phone_number }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>{{ $supplier->other_info }}</td>
                    <td>
                        <a href="{{ route('supplier.edit', $supplier
                        ) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </section>


</x-app-layout>




