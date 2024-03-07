<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('images/dc-logo.png') }}" type="images/png">

    {{-- FILE CHE COVERNA IL TUTTO --}}
    @vite('resources/js/app.js')
</head>
<body>
    <!-- HEADER -->
    <header>
        <!-- RECIPENTE LOGO -->
        <figcaption class="recipe-image">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
        </figcaption>
        <!-- RECIPENTE LISTA LINK -->
        <nav class="recipe-nav">
            <ul>
                @foreach ( config('header_links') as $link )
                    <li class="link-hover"><a href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </header>
    <!-- MAIN -->
    <main>
        <section id="recipe-jumbotrom">
            <div>
                <div class="reicpe-series">current series</div>
            </div>
        </section>
        <!-- SEZIONE CONTENUTO  -->
        <section id="recipe-content">
            <!-- CONTENITORE FILM -->
            <div class="container-films">
                @foreach ( config('comics') as $film )
                    <div class="recipe-films">
                        <img src="{{ $film['thumb'] }}" alt="">
                        <div class="text-films">{{ $film['series'] }}</div>
                    </div>
                @endforeach
            </div>
            <button class="button-films">load more</button>
        </section>
        <!-- SEZIONE CONTENUTO MENU -->
        <section id="recipe-content-comics">
            @foreach ( config('main_menu') as $menu )  
                <div class="recipe-comics">
                    <img src="{{ asset('images/'. $menu['image']) }}" alt="{{ $menu['text'] }}">
                    <span>{{ $menu['text'] }}</span>
                </div>
            @endforeach
        </section>
    </main>
    <!-- FOOTER -->
    <footer id="recipe-footer-top">
        <!-- RECIPE NAV FOOTER -->
        <nav class="footer-row">
            <!-- RECIPE COMICS&SHOP -->
            <div class="recipe-comics-shop">
                <div class="container-comics">
                    <h4 class="title-footer-top">dc comics</h4>
                    <ul class="list-footer-top">
                        @foreach ( config('footer_comics') as $comics )
                            <li class="link-footer-top" ><a href="{{ route($comics['route']) }}">{{ $comics['text'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="container-shop">
                    <h4 class="title-footer-top">shop</h4>
                    <ul class="list-footer-top">
                        @foreach ( config('footer_shop') as $shop )
                            <li class="link-footer-top" ><a href="{{ route($shop['route']) }}">{{ $shop['text'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- RECIPE DC -->
            <div class="recipe-dc">
                <h4 class="title-footer-top">dc</h4>
                <ul class="list-footer-top">
                    @foreach ( config('footer_dc') as $dc )
                        <li class="link-footer-top" ><a href="{{ $dc['route'] }}">{{ $dc['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- RECIPE SITES -->
            <div class="recipe-sites">
                <h4 class="title-footer-top">sites</h4>
                <ul class="list-footer-top">
                    @foreach ( config('footer_sites') as $sites )
                        <li class="link-footer-top" ><a href="{{ $sites['route'] }}">{{ $sites['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <!-- RECIPE IMMAGINE DC -->
        <figcaption>
            <img src="{{ asset('images/dc-logo-bg.png') }}" alt="Logo DC">
        </figcaption>
    </footer>
    <!-- FOOTER BOTTOM -->
    <footer id="recipe-footer-bottom">
        <div class="container-follow">
            <a class="sing-up" href="#">sing-up now!</a>
            <nav class="recipe-icon">
                <a class="follow" href="#">follow us</a>
                <!-- ICONE -->
                <ul class="link-icon">
                    @foreach ( config('footer_icon') as $icon )
                        <li><a href="{{ $icon['route'] }}"><img src="{{ asset('images/'. $icon['icon']) }}" alt="{{ $icon['text'] }}"></a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>