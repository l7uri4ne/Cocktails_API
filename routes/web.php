<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [App\Http\Controllers\CocktailsController::class, 'index'])->name('cocktails.index');

//Route::get('/cocktail', [App\Http\Controllers\CocktailController::class, 'index'])->name('cocktail.index');
Route::get('/cocktail/{idDrink}', [App\Http\Controllers\CocktailController::class, 'index'])->name('cocktail.index');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contactindex');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contactsend');

//Route::get('/test-contact', function () {
//    return new App\Mail\Contact([
//        'nom' => 'Durand',
//        'email' => 'durand@chezlui.com',
//        'message' => 'Je voulais vous dire que votre site est magnifique !'
//    ]);
//});
