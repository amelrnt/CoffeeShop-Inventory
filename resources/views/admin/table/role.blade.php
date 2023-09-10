<x-app-layout>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Role List</h3>
                {{-- <p class="text-subtitle text-muted">This is the products page.</p> --}}
            </div>
        </div>
    </x-slot>


    <a href="{{ route('role.create') }}"><button type="button" class="btn btn-primary">Add role</button></a>
    <br><br>
    <section class="section">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Role Name</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->description }}</td>
                    <td>
                        <a href="{{ route('role.edit', $role
                        ) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </section>


</x-app-layout>




