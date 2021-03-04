<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{title}', [BookController::class, 'show']);
Route::get('/search/{category}/{subcategory}', [BookController::class, 'search']);

Route::get('/example', function () {

    # Some hypothetical data we might want to explore
    $foo = [1, 2, 3];

    # dump die example
    //dd($foo);

    # dump die debug example
    //ddd($foo);
    
    # log example
    //Log::info($foo);

    return view('abc');
});