@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">

            <div class="my-5">
                
                <a href="/dashboard/flowers" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all product</a>
                <a href="/dashboard/flowers/{{ $flower->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/flowers/{{ $flower->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                </form>

                <h1 class="mt-3">{{ $flower->title }}</h1>
                <p>{{ $flower->content }}</p>

                <div style="max-height: 350px; overflow: hidden;">
                    @if ($flower->image)
                        <img src="{{ asset('storage/flowers/' . $flower->image) }}" class="img-fluid mt-3" alt="{{ $flower->title }}">
                    @else
                        <p>No image available</p>
                    @endif
                </div>

            </div>
            
        </div>
    </div>
</div>
@endsection