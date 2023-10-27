@extends('layouts.app')

@section('page_title', 'Home')

@section('content')

    <section class="welcome">

        @include('partials.banner')
        
        @include('partials.last')

    </section>

@endsection