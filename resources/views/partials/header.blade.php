<header>

    <nav class="navbar navbar-expand navbar-light bg-dark p-0">

        <div class="container">

            <div class="nav navbar-nav">

                <a class="nav-item nav-link py-3 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{route('home')}}">Home</a>

                <a class="nav-item nav-link py-3 {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{route('movies')}}">Movies</a>

                <a class="nav-item nav-link py-3" href="#">Contacts</a>
                
                <a class="nav-item nav-link py-3" href="#">About</a>

            </div>
            {{-- /.nav --}}

        </div>
        {{-- /.container --}}

    </nav>
    {{-- /.navbar --}}

</header>