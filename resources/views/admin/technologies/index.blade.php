@extends('layouts.admin')

@section('content')
    <h2>All Technologies</h2>

    <ul>
        @forelse ($technologies as $technology)
            <li>
                <a href="{{ route('admin.technologies.show', ['technology' => $technology->slug]) }}">
                    {{ $technology->name }}
                </a>
            </li>
        @empty
            <p>No technologies found.</p>
        @endforelse
    </ul>
@endsection
