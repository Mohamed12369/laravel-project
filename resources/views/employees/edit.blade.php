@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Employee</h2>
    <form method="POST" action="{{ route('employees.update', $employee) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $employee->email }}" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}" required>
        </div>
        <div class="mb-3">
            <label>Current Picture</label>
            <img src="{{ asset('storage/' . $employee->picture) }}" width="50" alt="Picture">
        </div>
        <div class="mb-3">
            <label>Change Picture</label>
            <input type="file" name="picture" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Employee</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
