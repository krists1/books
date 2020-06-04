<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Grāmatu plaukts</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="mt-4">
        <div class="container">

            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) === 'author' ? 'active' : '' }}" href="{{ route('author.index') }}">Autori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) === 'book' ? 'active' : '' }}" href="{{ route('book.index') }}">Grāmatas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) === 'publisher' ? 'active' : '' }}" href="{{ route('publisher.index') }}">Izdevniecības</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) === 'genre' ? 'active' : '' }}" href="{{ route('genre.index') }}">Žanri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(1) === 'review' ? 'active' : '' }}" href="{{ route('review.index') }}">Atsauksmes</a>
                </li>
            </ul>

            @yield('content')

        </div>
        <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    </body>
</html>