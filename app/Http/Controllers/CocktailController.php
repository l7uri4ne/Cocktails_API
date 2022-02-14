<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CocktailController extends Controller
{
    public function index(){
        $response = Http::get("http://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=11000");
        $data = $response->json();
        dd($data['id']);

        echo('Test');

    }
}
