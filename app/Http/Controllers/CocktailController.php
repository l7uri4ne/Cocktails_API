<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CocktailController extends Controller
{

    public function index($id){
        $response = Http::get("http://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=".$id);
        $response = $response->json();

        return view('pages/cocktail', [
            'cocktail' => $response['drinks']['0']
        ]);

    }
}
