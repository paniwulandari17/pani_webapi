<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TestApi</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

    </head>
    <body>
     <example-component id="app"></example-component>  

     <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
              