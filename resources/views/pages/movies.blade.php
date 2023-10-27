@extends('layouts.app')

@section('content')

    <section class="movies py-5 bg-light">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-5">
                @forelse($movies as $movie)
            <div class="col">
                <div class="card border-0 shadow h-100">
                    <img src="https://picsum.photos/200/300?random={{$movie->id}}">

                    <div class="card-body text-center d-flex flex-column gap-3">
                        <div>
                            <h5>title:</h5>
                            <div class="info">{{$movie->title}}</div>
                        </div>

                        <div>
                            <h5>original title:</h5>
                            <div class="info">{{$movie->original_title}}</div>
                        </div>

                        <div>
                            <h5>release:</h5>
                            <div class="info">{{$movie->date}}</div>
                        </div>

                        <div>
                            <h5>rating:</h5>
                            <div class="info">{{$movie->vote}}</div>
                        </div>

                        <div>
                            <h5>nationality:</h5>
                            <div class="info">{{$movie->nationality}}</div>
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