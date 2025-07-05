@extends('layouts.admin')

@section('content')
    <h1>Show employee</h1>

    <table class="table">
        <tr>
            <td>Email</td>
            <td>{{ $employee->email }}</td>
        </tr>
        <tr>
            <td>First name</td>
            <td>{{ $employee->first_name }}</td>
        </tr>
        <tr>
            <td>Last name</td>
            <td>{{ $employee->last_name }}</td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>{{ $employee->photo }}</td>
        </tr>
    </table>
    <a class="btn btn-dark" href="{{ $prevUrl }}">Back</a>
@endsection
