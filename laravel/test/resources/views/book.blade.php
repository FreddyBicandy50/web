<?php use App\Models\agent?>
<x-layout>

    <x-slot:title_page> Books</x-slot:title_page>
    <x-slot:heading_title> Details</x-slot:heading_title>

    <?php $book_size = "250" ?>
    @php
        if(agent::mobile())$book_size='150';
    @endphp
    <div data-aos="fade-up" class="px-10"> <!-- Add padding to create space from the edge -->
        <h1>
            <b>{{$book['heading']}}</b>
            <br>
        </h1>
    </div>

    <div class="inline-block px-20">
        <br>
        <a href="{{$book['link']}}" target="_blank">
            <img data-aos="fade-up" src="{{$book['image']}}" alt="{{$book['title']}}" width="{{$book_size}}" class=""/>
        </a>
    </div>

    <div class="px-20">
        <ul>
            <li data-aos="fade-up"><b>Author</b>: {{$book['publish_date']}}</li>
            <li data-aos="fade-up"><b>Publish Date</b>: {{$book['publish_date']}}</li>
            <li data-aos="fade-up"><b>Pages</b>: {{$book['page']}}</li>
        </ul>
    </div>
    <div data-aos="fade-up" class="px-10">
        <p>
            <br>
            {{$book['description']}}
        </p>
    </div>

</x-layout>
