@include('layout/header')
<div class="cocktail">
    <img src="{{$cocktail['strDrinkThumb']}}" alt="">
    <div class="right">
        <h2>{{ $cocktail['strDrink'] }}</h2>
        <div class="cocktailIngredients">
            <h3>Ingredients: </h3>
            <ul>
                @for ($i = 1; $i < 15; $i++)
                    <li>{{ $cocktail['strMeasure'.$i] }}{{ $cocktail['strIngredient'.$i] }}</li>
                @endfor
            </ul>
        </div>
        <div class="cocktailInstructions">
            <h3>Instructions: </h3>
            <p>{{ $cocktail['strInstructions'] }}</p>
        </div>
    </div>
</div>
@include('layout/footer')

