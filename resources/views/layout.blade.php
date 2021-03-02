<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout Test</title>
    <style>
        ul li{
            display: inline;
            background-color: aqua;
            margin: 5px;
        }

        li {
            padding: 15px;
            text-align: center;
        }

        .p-teste {
            size: 1.2em;
            color: blueviolet;
        }

        .square {
            height: 20px;
            width: 20px;
            background-color: aqua;
        }

        .square:hover {
            background-color: crimson;
        }

        .current-page {
            background-color: darkgoldenrod;
            color: black;
            size: 1.5em;
        }

        a, a:link, a:active, a:visited {
            text-decoration: none; 
        }

    </style>

</head>
<body>
    <div class="nav-bar">
        <ul>
            <li class="{{ Request::path() === '/' ? 'current-page' : ''}}" accesskey="1"><a href="/">Home</a></li>
            <li class="{{ strpos(Request::url(), '/testes') ? 'current-page' : ''}}" accesskey="2"><a href="/testes">Teste</a></li>
            <li class="{{ Request::path() === 'contact' ? 'current-page' : ''}}" accesskey="3"><a href="/contact">Contact</a></li>
        </ul>
    </div>

    @yield('content')
</body>
</html>