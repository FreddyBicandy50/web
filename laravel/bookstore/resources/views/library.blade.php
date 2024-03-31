<x-layout>
    <x-slot:page_title>Home</x-slot:page_title>
    <x-slot:heading>Books</x-slot:heading>

    @php
        $rows=0;
        $mobile=explode(' ',Explode('(',Request())[1])[0]!='Windows'?true:false;
        if($mobile) $row_limit=2;
        else $row_limit=3;
    @endphp

  <div class="min-h-full-">
    <table cellpadding="20">
        @foreach($books as $book)

            @if($rows==$row_limit)
                @php($rows=0)
                <tr>
                    @endif
                    <td >
                        <ul data-aos="fade-up">
                            <li>
                                <a  href="{{$book['book_page']}}">
                                    <img src="{{$book['img']}}" alt='{{$book['title']}}'
                                         width='{{$mobile?'300':'350'}}'>
                                </a>
                            </li>
                            <li><b>Publish Date:</b>{{$book['Publish_Date']}}</li>
                            <li><b>Author:</b>{{$book['Author']}}</li>
                            <li><b>Pages:</b>{{$book['Page']}}</li>
                        </ul>
                    </td>
                @php($rows+=1)
                @endforeach
    </table>

  </div>

</x-layout>
