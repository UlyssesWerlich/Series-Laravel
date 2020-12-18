<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>Controle de Séries</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between">
            <a class="navbar navbar-expand-lg" href="{{ route('listar_series') }}">Home</a>
            @auth
            <a href="/sair" class="text-danger">Sair</a>
            @endauth

            @guest
            <a href="/entrar">Entrar</a>
            @endguest
        </nav>

        <div class="container">

            <div class="jumbotron">
                <h1>@yield('cabecalho')</h1>
            </div>

            @yield('conteudo')
        </div>
    </body>
</html>