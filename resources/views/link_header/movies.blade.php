{{-- RECUPERO LAYOUT BASE --}}
@extends('layout.app')

{{-- CREO TITOLO --}}
@section('title', 'Movies')

{{-- CREO CONTENUTO --}}
@section('main-content')
    <section id="recipe-content">
        <!-- CONTENITORE FILM -->
        <div class="container-films">
            @foreach ( $comics as $index => $film )
            <div class="recipe-films">
                <a href="{{ route('movie', $index) }}">
                    <img src="{{ $film['thumb'] }}" alt="">
                    <div class="text-films"></div>
                </a>
            </div>
            @endforeach
        </div>
        <button class="button-films">load more</button>
    </section>
@endsection