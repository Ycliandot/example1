@extends('layouts.admin')

@section('content')
    <h1>Edit employee</h1>
    <div class="row w-25 h-25">
        <img src="{{ asset('storage/' . $employee->photo) }}" alt="no photo">
    </div>
    <div class="row">
        <form action="{{ route('admin.employees.update', $employee->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $employee->email }}">
                @error('email')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="first_name" class="form-label">First name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="{{ $employee->first_name }}">
                @error('first_name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="{{ $employee->last_name }}">
                @error('last_name')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo">
                @error('photo')
                <p class="alert alert-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ $prevUrl }}" class="btn btn-primary">Back</a>
        </form>
    </div
@endsection
