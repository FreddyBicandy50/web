<?php
use App\Models\books;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('library', [
            'books' => books::all()
        ]
    );
});

Route::get('/book/{id}', function ($id)  {
    return view('book', ['book' => books::Get_book($id)]);
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});



