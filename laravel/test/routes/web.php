<?php

use Illuminate\Support\Facades\Route;
use App\Models\Books;



Route::get('/', function () {
    return view('library',['books'=>Books::all()]);
});

Route::get('/book/{id}', function ($id) {
    $GET_id = $id - 1; // Adjust for 0-based indexing
    $books = Books::all();
    if (!isset($books[$GET_id])) {
        return view('notfound');
    }
    $GET_book = $books[$GET_id];
    return view('book', ['book' => $GET_book]);
});

Route::get('about', function () {
    return view('about');
});



Route::get('contact', function () {
    return view('contact');
});
