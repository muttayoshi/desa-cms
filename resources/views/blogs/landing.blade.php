@extends('layouts.app')

@section('content')
    <h1>Welcome to the Landing Page</h1>
    <a href="{{ route('blogs.index') }}">View Blogs</a>
@endsection
