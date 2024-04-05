<?php

use App\Models\agent;
use App\Models\books;

?>
<x-layout>
    <x-slot:page_title>Book</x-slot:page_title>
    <x-slot:heading_title>Book Details</x-slot:heading_title>

    @php
        $rows=0;
        $col=0;
        if (agent::mobile()) $col=2;
        else $col=3;
    @endphp

    <table cellpadding="20">
        <tr>
            <td data-aos="fade-up">
                <br>
                <a href="{{$book['book_link']}}" target="_blank">
                    <img src="{{$book['cover_link']}}" width="150" alt="{{$book['title']}}">
                </a>
            </td>
        </tr>
        
    </table>

</x-layout>
