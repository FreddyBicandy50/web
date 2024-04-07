<?php use App\Models\agent ?>

@props(["Active"=>false])
@php
    // Determine font style based on whether the user agent is mobile
    $font_style = "text-sm";
    if(Agent::mobile()) {
        $font_style = "text-base";
    }
    // Define classes for enabled and disabled states
    $Enable = "bg-gray-900 text-white block rounded-md px-3 py-2 font-medium";
    $Disable = "text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 font-medium";
@endphp

    <!-- Anchor tag with dynamic attributes and classes -->
<a {{$attributes}} class="{{$Active ? $Enable : $Disable}} {{$font_style}}" aria-current="page">
    {{$slot}} <!-- Render the content provided within the component tag -->
</a>
