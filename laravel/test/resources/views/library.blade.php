<?php use App\Models\agent; ?>
<x-layout>
    <x-slot:title_page> Home</x-slot:title_page>
    <x-slot:heading_title> Library</x-slot:heading_title>
    @php
        $rows=0;
        $col=3;
        if(agent::mobile()) $col=2;
    @endphp

    <table cellpadding="10">
        <tr>
        @foreach($books as $book)
            @if($rows==$col)
                <tr> <?php $rows = 0 ?> @endif
                    <td data-aos="fade-up">
                        <a href="book/{{$book['id']}}"> <img src="{{$book['image']}}" alt="{{$book['title']}}"
                                                             width="250"/></a>
                    </td>
                        <?php $rows += 1 ?>
                    @endforeach
                </tr>

    </table>

</x-layout>
