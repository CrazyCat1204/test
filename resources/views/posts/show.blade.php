<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Chi tiết bài viết</h1>
        <h2>Tiêu đề bài viết: {{ $post->title }}</h2>
        <p>Nội dung bài viết: {{ $post->content }}</p>
        <p>Published at: {{ $post->published_at }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Quay trở lại</a>
    </div>
</body>
</html>
