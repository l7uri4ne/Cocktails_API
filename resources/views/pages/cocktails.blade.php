@include('layout/header')
<div class="cocktailsImages">
@foreach($cocktails as $cocktail)
    <div>
        <a href="http://www.thecocktaildb.com/api/json/v1/1/lookup.php?i={{$cocktail['idDrink']}}">
            <p>{{ $cocktail['strDrink'] }}</p>
            <img src="{{$cocktail['strDrinkThumb']}}" alt="">
        </a>
    </div>
@endforeach
</div>
@include('layout/footer')

