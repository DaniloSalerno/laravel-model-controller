@extends('layouts.app')

@section('page_title', 'Movies')

@section('content')

    <section class="movies py-5 bg-light">

        <div class="container">

            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-5">

                @forelse($movies as $movie)

                <div class="col">

                    @include('partials.card_movie')

                </div>

                @empty

                <div>No movies available</div>

                @endforelse

            </div>

        </div>
        
    </section>

@endsection