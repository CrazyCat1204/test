@extends('layout')

@section('content')
    <h1>Chỉnh sửa bài viết</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Tiêu đề:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required>
        <label for="content">Nội dung:</label>
        <textarea name="content" id="content" required>{{ $post->content }}</textarea>
        <label for="published_at">Ngày xuất bản:</label>
        <input type="date" name="published_at" id="published_at" value="{{ $post->published_at }}">
        <button type="submit">Cập nhật</button>
    </form>
@endsection
