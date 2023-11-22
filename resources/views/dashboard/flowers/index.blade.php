@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-3 border-bottom">
    <h1 class="h2 mt-5">Florist Product</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
@endif

    <div class="table-responsive col-lg-10">
        <a href="/dashboard/flowers/create" class="btn btn-primary mb-3">Create New Product</a>
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($flowers as $flower)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $flower->title }}</td>
                <td>{{ $flower->content }}</td>
                <td>{{ $flower->price }}</td>
                <td>
                    <a href="/dashboard/flowers/{{ $flower->id }}" class="badge bg-info">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                    <a href="/dashboard/flowers/{{ $flower->id }}/edit" class="badge bg-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <form action="/dashboard/flowers/{{ $flower->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection