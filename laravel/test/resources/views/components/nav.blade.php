<?php
// Extract the URI part after 'book/' from the current URL
$bookUri = explode('book/', Request()->url());
// If there is a part after 'book/' in the URL
if (count($bookUri) >= 2)
    // Build the URI for the book by appending 'book/' to the extracted part
    $bookUri = 'book/' . $bookUri[1];

?>

    <!-- Home button with active state based on current URL -->
<x-nav_style href="/" :Active="Request()->is('/') ||  Request()->is($bookUri)">Home</x-nav_style>

<!-- About button with active state based on current URL -->
<x-nav_style href="/about" :Active="Request()->is('about')">About</x-nav_style>

<!-- Contact button with active state based on current URL -->
<x-nav_style href="/contact" :Active="Request()->is('contact')">Contact</x-nav_style>
