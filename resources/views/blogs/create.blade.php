@extends('layouts.app')

@section('content')
    <h1>Create Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <textarea name="content" placeholder="Content"></textarea>
        <input type="text" name="slug" placeholder="Slug">
        <button type="submit">Save</button>
    </form>
@endsection
