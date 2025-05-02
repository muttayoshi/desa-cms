@extends('layouts.app')

@section('content')
    <h1>Edit Blog</h1>
    <form action="{{ route('blogs.update', $blog) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $blog->title }}">
        <textarea name="content">{{ $blog->content }}</textarea>
        <input type="text" name="slug" value="{{ $blog->slug }}">
        <button type="submit">Update</button>
    </form>
@endsection
