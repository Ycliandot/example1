@extends('layouts.admin')

@section('content')
    <h1>Employees</h1>
    <div class="mb-2">
        <a href="{{ route('admin.employees.create') }}" class="btn btn-primary">Add Employee</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Photo</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>
                    <a href="{{ route('admin.employees.show', $employee->id) }}">{{ $employee->email }}</a>
                </td>
                <td>{{ $employee->first_name}}</td>
                <td>{{ $employee->last_name}}</td>
                <td>{{ $employee->photo}}</td>
                <td><a href="{{ route('admin.employees.edit', $employee->id) }}" class="btn btn-secondary">Edit</a></td>
                <td>
                    <form action="{{ route('admin.employees.destroy', [$employee->id, 'page=' . $employees->currentPage()]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        {{ $employees->withQueryString()->links() }}
    </div>
@endsection
