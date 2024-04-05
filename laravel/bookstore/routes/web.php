<?php

use Illuminate\Support\Facades\Route;
use App\Models\Books_list;



Route::get('/', function () {
    return view('library',['books'=>Books_list::all()]);
});


Route::get('/book/{id}', function () {
    $id=explode('book/',Request()->url())[1]-1;
    return view('book',['book'=>Books_list::all()[$id]]);
});


Route::get('about', function () {
    return view('about');
});


Route::get('contact', function () {
    return view('contact');
});
