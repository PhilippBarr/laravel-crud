@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Company</h1>

    <form action="{{ route('companies.update', $company) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $company->name }}" required>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="{{ $company->address }}" required>
        </div>

        <div class="form-group">
            <label for="website">Website</label>
            <input type="url" name="website" class="form-control" value="{{ $company->website }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $company->email }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
