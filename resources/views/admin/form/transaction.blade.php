<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Role</h3>
            </div>
        </div>
    </x-slot>

    <section class="section">
        <form method="post" action="{{ route('role.store') }}">
            @csrf
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" step="0.01" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="type">Type:</label>
                <select id="type" name="type" class="form-control" required>
                    <option value="sale">Sale</option>
                    <option value="purchase">Purchase</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="text" id="date" name="date" class="form-control" placeholder="Select a date" required>
            </div>

            <!-- Transaction Details -->
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name[]" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity[]" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="unit_price">Unit Price:</label>
                <input type="number" id="unit_price" name="unit_price[]" step="0.01" class="form-control" required>
            </div>

            <button type="button" id="addDetail" class="btn btn-primary">Add Transaction Detail</button>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success mt-3">Save Transaction</button>
        </form>
    </section>

    <script>
        // Include the flatpickr datepicker initialization here
        flatpickr("#date", {
            dateFormat: "Y-m-d",
            enableTime: false,
        });

        // JavaScript to add additional transaction detail fields
        document.getElementById("addDetail").addEventListener("click", function () {
            const detailFields = document.getElementById("transactionDetails");
            const newDetailField = detailFields.firstElementChild.cloneNode(true);
            detailFields.appendChild(newDetailField);
        });
    </script>

</x-app-layout>

