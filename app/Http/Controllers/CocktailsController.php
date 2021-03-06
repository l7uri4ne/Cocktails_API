<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CocktailsController extends Controller
{
    public function index(){
        $cocktails = [];
        for ($i=11000; $i<11015; $i++){

            $response = Http::get("http://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=".$i);
            $data = $response->json();

            $cocktails[$i] = $data['drinks']['0'];

        }
        return view('pages/cocktails', ['cocktails' => $cocktails]);
    }
}
