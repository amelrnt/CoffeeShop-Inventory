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
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <br><br>
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" required>
            <br><br>
            <button type="submit">Add Role</button>
        </form>
    </section>


</x-app-layout>

