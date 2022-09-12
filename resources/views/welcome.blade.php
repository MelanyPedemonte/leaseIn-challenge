<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
        <script defer src="{{ mix('js/app.js') }}"></script>
    </head>
    <body>
        <div id="app">
        <v-app app>
            <v-container>
            <table-component></table-component>
                
            </v-container>
        </v-app>
        </div>
    </body>
</html>
