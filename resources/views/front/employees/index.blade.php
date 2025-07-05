@extends('layouts.app')

@section('content')
    <h3>Employees</h3>
{{--    <div>--}}
{{--        <a href="{{ route('post.create') }}" class="btn btn-primary">Add post</a>--}}
{{--        <a href="{{ route('post.create') }}" class="btn btn-primary">Create category</a>--}}
{{--    </div>--}}
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Photo</th>
{{--            <th></th>--}}
{{--            <th></th>--}}
        </tr>
        </thead>
        <tbody>

        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
{{--                <th><a href="{{ route('post.show', $employee->id) }}">{{ $employee->title }}</a></th>--}}
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->first_name}}</td>
                <td>{{ $employee->last_name}}</td>
                <td>{{ $employee->photo}}</td>
{{--                <td><a href="{{ route('post.edit', $employee->id) }}" class="btn btn-secondary">Edit</a></td>--}}
{{--                <td>--}}
{{--                    <form action="{{ route('post.destroy', $employee->id) }}" method="post">--}}
{{--                        @csrf--}}
{{--                        @method('delete')--}}
{{--                        <button class="btn btn-danger">Delete</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        {{ $employees->withQueryString()->links() }}
    </div>
@endsection
