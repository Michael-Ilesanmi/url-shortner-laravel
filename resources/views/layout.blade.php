<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Shortify</title>

        <!-- Styles -->
        <style>
            #shortify_tag::after{
                content: '';
                width: 100%;
                height: 90%;
                position: absolute;
                left: 7px;
                top: 10%;
                rotate: 350deg;
                border: solid 2px yellow;
                border-radius: 100%;
            }
        </style>

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased bg-gray-900 min-h-screen h-screen p-0 m-0">
        @include('partials._navbar')
        @yield("content")
        @include('partials._footer')
    </body>
</html>
