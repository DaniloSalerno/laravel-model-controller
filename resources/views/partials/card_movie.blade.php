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
    {{-- /.card-body --}}

</div>
