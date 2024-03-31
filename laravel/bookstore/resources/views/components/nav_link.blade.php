@props(['Active'=>false])
@php
    $Enable='bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium';
    $Disable='text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium'
@endphp
<a {{$attributes}} class="{{$Active?$Enable:$Disable}}"
   aria-current="page">{{$slot}}</a>


