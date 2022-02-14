<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Cocktails API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="cocktails">
        @foreach($cocktails as $cocktail)
            <div>
                <p>{{ $cocktail['strDrink'] }}</p>
                <img src="{{$cocktail['strDrinkThumb']}}" alt="">
            
            </div>
        @endforeach

    </body>
</html>