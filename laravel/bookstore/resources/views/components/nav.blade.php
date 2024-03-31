@php

    if (Request()->is('/') || count(explode('book',url()->current()))>=2)
        $activation=true;
     else $activation=false;
@endphp
<x-nav_link href="/" :Active="$activation">Library</x-nav_link>
<x-nav_link href="/about" :Active="Request()->is('about')">About</x-nav_link>
<x-nav_link href="/contact" :Active="Request()->is('contact')">Contact</x-nav_link>
