@extends('layouts.admin')

@section('content')
    <div>
        <h2>{{ $technology->name }}</h2>
        <p>{{ $technology->description }}</p> <!-- Aggiungi la descrizione qui -->
    </div>

    <div>
        <h5 class="mt-4">Posts</h5>
        @if ($technology->posts->isNotEmpty())
            <ul>
                @foreach ($technology->posts as $post)
                    <li>
                        <a href="{{ route('admin.posts.show', ['post' => $post->slug]) }}">
                            {{ $post->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No posts found for this technology.</p>
        @endif
    </div>
@endsection
