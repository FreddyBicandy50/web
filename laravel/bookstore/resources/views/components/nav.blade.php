@php
    $enable='bg-gray-900 text-white block rounded-md px-3 py-2';
    $disable='text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2';
@endphp

<a href="/" class="{{Request()->is('/')? $enable:$disable}} text-base font-medium"
   aria-current="page">Home</a>
<a href="about"
   class="{{Request()->is('about')? $enable:$disable}} text-base font-medium">About</a>
<a href="contact"
   class="{{Request()->is('contact')? $enable:$disable}} text-base font-medium">Contact</a>

