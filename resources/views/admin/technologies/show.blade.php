@extends('layouts.admin')

@section('content')
    <h2>{{ $technology->name }}</h2>

    <h5 class="mt-4">Post</h5>
    @foreach ($technology->posts as $post)
        <div>
            <a href="{{ route('admin.posts.show', ['post' => $post->slug]) }}">
                {{ $post->name }}
            </a>
        </div>
    @endforeach
@endsection