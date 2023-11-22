@extends('dashboard.layouts.main')

@section('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mt-5 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>
        <h1 class="h2 pt-2 mt-2">Welcome back, {{ auth()->user()->name }}</h1> 

@endsection