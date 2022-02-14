@include('layout/header')
<div class="cocktailsImages">
@foreach($cocktails as $cocktail)
    <div>
        <a href="{{('cocktail')}}/{{$cocktail['idDrink']}}">
            <p>{{ $cocktail['strDrink'] }}</p>
            <img src="{{$cocktail['strDrinkThumb']}}" alt="">
        </a>
    </div>
@endforeach
</div>
@include('layout/footer')

