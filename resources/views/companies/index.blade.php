@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Companies</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('companies.create') }}" class="btn btn-primary">Create New Company</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Website</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->website }}</td>
                    <td>{{ $company->email }}</td>
                    <td>
                        <a href="{{ route('companies.edit', $company) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
