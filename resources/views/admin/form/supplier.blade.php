<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Supplier</h3>
            </div>
        </div>
    </x-slot>

    <section class="section">
        <form method="post" action="{{ route('supplier.store') }}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <br><br>
            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number" id="phone_number" required>
            <br><br>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>
            <br><br>
            <label for="other_info">Other Info:</label>
            <input type="text" name="other_info" id="other_info" required>
            <br><br>
            <button type="submit">Add Supplier</button>
        </form>
    </section>


</x-app-layout>

