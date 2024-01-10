<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        header.cssheader {
            background-color: red;
            padding: 20px;
            text-align: right;
        }

        header.cssheader a {
            text-decoration: none;
            color: white;
            margin-right: 6px;
        }

        .container{
            text-align:center;
        }

        .container a{
            text-decoration: none;
            text-align:center;
        }
    </style>
</head>
<body>
    @yield('header') 
    <header class='cssheader'>   
        <a href="/">HOME</a>
        <a href="/smkn2">SMKN2</a>
        <a href="/instagram">INSTAGRAM</a>
        <a href="/youtube">YOUTUBE</a>
        <a href="/location">LOKASI</a>
    </header>
    <div class='container'>
        @yield('content')
    </div>
</body>
</html>