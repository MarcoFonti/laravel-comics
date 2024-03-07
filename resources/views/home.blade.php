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
    <h1>home</h1>
</body>
</html>