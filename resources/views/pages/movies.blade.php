@extends('layouts.app')

@section('content')

    <section class="movies py-5 bg-light">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-5">
                @forelse($movies as $movie)
            <div class="col">
                <div class="card border-0 shadow h-100">
                    <img src="https://picsum.photos/200/300?random={{$movie->id}}">

                    <div class="card-body text-center">
                        <div class="d-flex align-items-center gap-2">
                            <h5>title:</h5>
                            <div>{{$movie->title}}</div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <h5>release:</h5>
                            <div>{{$movie->date}}</div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <h5>rating:</h5>
                            <div>{{$movie->vote}}</div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <h5>nationality:</h5>
                            <div>{{$movie->nationality}}</div>
                        </div>

                    </div>
                </div>
            </div>
                @empty
        
                @endforelse
            </div>
        </div>
    </section>

@endsection