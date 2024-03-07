<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('assets/images/dc-logo.png') }}" type="images/png">

    {{-- FILE CHE COVERNA IL TUTTO --}}
    @vite('resources/js/app.js')
</head>
<body>
    <!-- HEADER -->
    <header>
        <!-- RECIPENTE LOGO -->
        <figcaption class="recipe-image">
            <img src="{{ asset('assets/images/dc-logo.png') }}" alt="">
        </figcaption>
        <!-- RECIPENTE LISTA LINK -->
        <nav class="recipe-nav">
            <ul>
                @foreach ( config('header_links') as $link )
                    <li><a href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
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
    </main>
</body>
</html>