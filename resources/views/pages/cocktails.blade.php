@include('layout/header')

@foreach($cocktails as $cocktail)
    <div>
        <p>{{ $cocktail['strDrink'] }}</p>
        <img src="{{$cocktail['strDrinkThumb']}}" alt="">

    </div>
@endforeach

@include('layout/footer')

