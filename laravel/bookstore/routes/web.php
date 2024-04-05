<?php

use Illuminate\Support\Facades\Route;
use App\Models\books;

Route::get('/', function () {
    return view('library',['books'=>books::get_all()]);
});


Route::get('/book/{id}', function () {
    return view('book',['book'=>books::get_book(explode('book/',Request()->url())[1])]);
});


Route::get('about', function () {
    return view('about');
});


Route::get('contact', function () {
    return view('contact');
});
