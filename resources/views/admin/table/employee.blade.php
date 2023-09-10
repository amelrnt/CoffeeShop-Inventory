<x-app-layout>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Empoyee List</h3>
                {{-- <p class="text-subtitle text-muted">This is the products page.</p> --}}
            </div>
        </div>
    </x-slot>


    <a href="{{ route('employee.create') }}"><button type="button" class="btn btn-primary">Add Employee</button></a>
    <br><br>
    <section class="section">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Employee Name</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>
                        <a href="{{ route('employee.edit', $employee
                        ) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </section>


</x-app-layout>




