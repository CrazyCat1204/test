@extends('layout')

@section('content')
<h1>Danh sách bài viết</h1>
<a href="{{ route('posts.create') }}">Tạo bài viết mới</a>

@if ($message = Session::get('success'))
    <div>
        <strong>{{ $message }}</strong>
    </div>
@endif

<table class="table">
    <tr>
        <th>ID</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Thời gian xuất bản</th>

        <th>Hành động</th>
    </tr>
    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
                </a>
            </td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->published_at }}</td>
            <td class="d-flex justify-content-between">
                <a href="{{ route('posts.edit', $post->id) }}">Sửa</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Xóa</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection