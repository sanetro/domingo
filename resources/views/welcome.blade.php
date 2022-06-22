<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Domingo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;

                background: slategrey;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <h1>Domingo</h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus placeat deserunt sit incidunt numquam, quasi sint libero veritatis, debitis repellendus maxime asperiores reiciendis odit soluta temporibus ipsam adipisci deleniti cumque.
            <a href="{{ route('welcome') }}/routes">
                <button>Show me list of routes</button>
            </a>
        </div>
            <h2>Images</h2>
            <br>
            The image is in public folder. It means that anyone has access.
            <br>
            <img src="{{ URL('images/icon-box.jpg') }}" alt="icon-box">
            <br>
            The image is kept in the storage folder, so no one has direct access to it.
            <br>
            <img src="{{ URL('storage/hero-banner.jpg') }}" alt="icon-box">
        </div>
    </body>
</html>
