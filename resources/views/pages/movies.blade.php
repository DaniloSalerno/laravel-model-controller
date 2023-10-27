@extends('layouts.app')

@section('content')
    <ul>
        @forelse($movies as $movie)
            <li>
                {{$movie->title}}
            </li>
        @empty
        
        @endforelse
    </ul>

@endsection