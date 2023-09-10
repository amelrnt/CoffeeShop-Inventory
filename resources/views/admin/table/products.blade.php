<x-app-layout>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Products List</h3>
                <p class="text-subtitle text-muted">This is the products page.</p>
            </div>
        </div>
    </x-slot>


    <a href="{{ route('products.create') }}"><button type="button" class="btn btn-primary">Add Product</button></a>
    <br><br>
    @if ($products)
    <section class="section">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>Rp {{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </section>
    @else
    <h3 class="text-center">No Products Data</h3>
    @endif


</x-app-layout>




