<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', "laravel Blog")</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS  -->
        <link href="\css\app.css" rel="stylesheet">

    </head>
    
    <body>
        
        <header>

            <nav>
                <ul>
                    <li><a href="/" rel="noopener noreferrer">Home</a></li>
                    <li><a href="/login" rel="noopener noreferrer">Login</a></li>
                    <li><a href="http://laravel.com" target="_blank" rel="noopener noreferrer">Laravel</a></li>
                    <li><a href="http://mdn.com" target="_blank" rel="noopener noreferrer">MDN</a></li>
                </ul>
            </nav>

        </header>

        <main>
        
            @yield('content')
        
        </main>


        <footer>Laravel blog</footer>

    </body>
</html>
