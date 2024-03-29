<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no" />
        <title>IITU CAMPUS</title>
        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,900&display=swap" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="app"></div>
        <script src="{{mix('js/app.js')}}" ></script>
    </body>
</html>