@extends('layout.app')

@section('title', 'Movies')
    

@section('main-content')
<!-- MAIN MOVIES -->
    <section id="recipe-jumbotro">
        <div class="recipe-movies"></div>
        <img class="image-movies" src="{{ asset('images/adv.jpg') }}" alt="">
    </section>
    <!-- SEZIONE CONTENUTO MENU -->
    <section id="recipe-content-movies">
        <article class="article-movies">
            <h1 class="title-movies">fffffkofkoko</h1>
            <div class="movies-info">
                <div class="movies-price">
                    <div>U.S Price: $19.99</div>
                    <div>AVAILABLE</div>
                </div>
                <div>Check Availability</div>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis rerum voluptates iusto reprehenderit error sapiente inventore nam, possimus explicabo vero quia vel eos temporibus impedit veniam eligendi. Possimus, voluptas. Perferendis!
                Nemo quia delectus assumenda aliquam ab deserunt, a temporibus deleniti eveniet tempore fugiat ullam molestiae, impedit officiis nulla magni id soluta, eos dolore inventore possimus sapiente tenetur? Culpa, deserunt sed.
                Porro, fuga sed, aspernatur nobis magnam, in eaque sequi quam adipisci eveniet numquam facere laborum nisi quibusdam nemo voluptas aperiam minus earum amet ipsam repellat voluptatum! Voluptatem debitis beatae laboriosam!</p>
            </div>
        </article>
        <figure>
            <h5 class="text-movies">ADVERTISEMENT</h5>
            <img class="path-movies" src="{{ asset('images/adv.jpg') }}" alt="">
        </figure>
    </section>
    <!-- SEZIONE INFORMAZIONI FILM -->
    <section id="recipe-info-movies">
        <div class="container-movies">
            <div class="recipe-talent">
                <h3 class="title-info">Talent</h3>
                <div class="d-flex-movies">
                    <h6 class="title-action">Art by:</h6>
                    <div class="actors-movies text-blue">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius beatae incidunt vero magni veritatis culpa a porro.</div>
                </div>
                <div class="d-flex-movies">
                    <h6 class="title-action">Written by:</h6>
                    <div class="actors-movies text-blue">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius beatae incidunt vero magni veritatis culpa a porro.</div>
                </div>
            </div>
            <div class="recipe-specs">
                <h3 class="title-info">Specs</h3>
                <div class="d-flex-movies">
                    <h6 class="title-action">Series:</h6>
                    <div class="title-margin text-blue">ACTION COMICS</div>
                </div>
                <div class="d-flex-movies">
                    <h6 class="title-action">U.S Price:</h6>
                    <div class="title-margin">$19.99</div>
                </div>
                <div class="d-flex-movies">
                    <h6 class="title-action">On Sale Date:</h6>
                    <div class="title-margin">Oct 02 2018</div>
                </div>
            </div>
        </div>
    </section>
    <!-- SEZIONE CONTENUTO MENU -->
    <section id="recipe-content-link-movies">
        @foreach ( $main_menu as $menu )  
            <div class="recipe-comics">
                <img class="image-link-movies" src="{{ asset('images/'. $menu['image']) }}" alt="{{ $menu['text'] }}">
                <span>{{ $menu['text'] }}</span>
            </div>
        @endforeach
    </section>
@endsection