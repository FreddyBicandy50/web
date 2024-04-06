<?php use App\Models\agent?>
<x-layout>
    <x-slot:page_title>Home</x-slot:page_title>
    <x-slot:heading_title>Library</x-slot:heading_title>

    @php
        $rows=0;
        $col=0;
        if (agent::mobile()) $col=2;
        else $col=3;
    @endphp

    <table cellpadding="20">
        <tr>
        @foreach($books as $book)
            @if($rows==$col)
                    <?php $rows = 0 ?>
                <tr>
                    @endif
                    <td data-aos="fade-up">
                        <a href="/book/{{$book['id']}}" >
                            <img src="{{$book['cover_link']}}" width="250" alt="{{$book['title']}}">
                            <b>Author:</b>{{$book['author']}}<br>
                            <b>Publish Date:</b>{{$book['publish_date']}}<br>
                            <b>pages:</b>{{$book['pages']}}<br>
                        </a>
                    </td>
                        <?php $rows += 1 ?>
                    @endforeach
                </tr>
    </table>

</x-layout>
