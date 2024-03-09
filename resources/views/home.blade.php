{{-- RECUPERO LAYOUT BASE --}}
@extends('layout.app')

{{-- CREO TITOLO --}}
@section('title', 'Home')
    
{{-- CREO CONTENUTO --}}
@section('main-content')
<!-- MAIN HOME -->
    <section id="recipe-jumbotrom">
        <div>
            <div class="reicpe-series">current series</div>
        </div>
    </section>
    <!-- SEZIONE CONTENUTO  -->
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
    <!-- SEZIONE CONTENUTO MENU -->
    <section id="recipe-content-comics">
        @foreach ( $main_menu as $menu )  
            <div class="recipe-comics">
                <img src="{{ asset('images/'. $menu['image']) }}" alt="{{ $menu['text'] }}">
                <span>{{ $menu['text'] }}</span>
            </div>
        @endforeach
    </section>
@endsection