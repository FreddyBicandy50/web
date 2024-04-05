<?php

use App\Models\agent;
use App\Models\Books_list;

?>
<x-layout>
    <x-slot:page_title>Book</x-slot:page_title>
    <x-slot:heading_title>Book Details</x-slot:heading_title>
    <h1 data-aos="fade-up"><b>{{$book['heading']}}</b></h1>
    <a href="{{$book['book_link']}}" target="_blank">
        <img data-aos="fade-up" src="{{$book['cover_link']}}" width="150" alt="{{$book['title']}}">
    </a>
    <h1 data-aos="fade-up">{{$book['description']}}</h1>

</x-layout>
