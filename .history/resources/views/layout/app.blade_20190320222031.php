<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .user-part-div {
                border: 2px solid gray;
            }

            input[type="range"] {
    -webkit-appearance: none;
    -moz-appearance: none;
    border-radius: 26px;
    height: 3px;
    width: 170px;
    background-color: rgb(74, 123, 197);
}
input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 0;
    height: 0;
}
#progressbar:hover input[type="range"]::-webkit-slider-thumb {
    width:20px;
    height: 20px;
    border: 1px solid blue;
    border-radius: 50%;
    background: #fff;
    box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.6);
}
        </style>
    </head>
    <body>
        @yield('content')

    </body>
</html>
