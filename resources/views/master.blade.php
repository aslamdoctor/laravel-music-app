<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Music App</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div class="bg-blue-700 py-3">
            <div class="container mx-auto flex justify-between text-white">
                <a href="/">Music App</a>

                <ul class="flex justify-content-end">
                    <li class="ml-6"><a href="/artists">Artists</a></li>
                    <li class="ml-6"><a href="/genre">Genre</a></li>
                    <li class="ml-6"><a href="/albums">Albums</a></li>
                </ul>
            </div>
        </div>
        <div class="container mx-auto">
            @yield('content')
        </div>
    </body>
</html>
