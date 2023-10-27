<section class="last py-5">

    <div class="container">
        <h2>Last movies added</h2>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 gx-4">

            @forelse($movies as $movie)

            <div class="col">
                @include('partials.card_movie')
            </div>

            @empty
                <div>No movies available</div>
            @endforelse

        </div>
    </div>

    <div class="d-flex justify-content-center py-5">
        <a href="{{route('movies')}}" class="btn btn-outline-danger">Complete list</a>
    </div>
</section>