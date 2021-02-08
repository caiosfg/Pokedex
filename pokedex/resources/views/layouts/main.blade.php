<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Fonte Google -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet" />
        
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- CSS da API -->
        <link rel="stylesheet" href="/css/style.css">  
        <script src="/js/scripts.js"></script>  
        
    </head>
    <body>
       @yield('content')
      <footer>
        <p>Pokedex &copy; 2021</p>
      </footer>
    </body>
</html>
