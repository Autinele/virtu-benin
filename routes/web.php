<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/visite', function () {
    return view('virtual-tour');
});
Route::get('/produit', function () {
    return view('product');
});
Route::get('/panier', function () {
    return view('cart');
});
