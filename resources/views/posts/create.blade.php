@extends('layout')

@section('content')
    <h1>Tạo bài viết mới</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" id="title" required>
        <label for="content">Nội dung:</label>
        <textarea name="content" id="content" required></textarea>
        <label for="published_at">Ngày xuất bản:</label>
        <input type="datetime-local" name="published_at" id="published_at">
        <button type="submit">Tạo</button>
    </form>
@endsection
