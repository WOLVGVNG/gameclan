<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            html, body {
                background-image: url('images/minigame-bg.jpg');
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                padding: 35px 0 35px 0;
            }

            .user-part-div {
                border: 2px solid gray;
            }

            #filter-div {
                border-right: 3px solid gray;
            }

            .container {
                background-color: white;
                border-radius:10px;
            }
        </style>
    </head>
    <body>
        @yield('content')

    </body>
</html>
