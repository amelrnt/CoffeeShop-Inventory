<x-app-layout>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Transction List</h3>
                {{-- <p class="text-subtitle text-muted">This is the products page.</p> --}}
            </div>
        </div>
    </x-slot>


    <a href="{{ route('transaction.create') }}"><button type="button" class="btn btn-primary">Add transaction</button></a>
    <br><br>
    <section class="section">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Type</th>
                <th scope="col">Reference Number</th>
                <th scope="col">Amount</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->date }}</td>
                    <td>{{ $transaction->type }}</td>
                    <td>{{ $transaction->reference_number }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>
                        <a href="{{ route('transaction.edit', $transaction
                        ) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </section>


</x-app-layout>




