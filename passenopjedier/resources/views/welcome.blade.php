<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Passen Op Je Dier</title>

        <link rel="stylesheet" href="/css/master.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <section class="content">
            <h1 class="context">Welcome To PassenOpJeDier</h1>
            <h1 class="context2">This Site Is Made For A School Project</h1>

            <button onclick="window.location.href='/login'" class="btn btn-primary btn-welcome">Log in</button>
            <button onclick="window.location.href='/register'" class="btn btn-secondary btn-welcome">Sign up</button>
        </section>
    </body>
</html>
