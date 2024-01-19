<?php
// Function to check if the current URL matches the specified route
function URL($route)
{
    // Compare the requested URI with the given route
    if ($_SERVER['REQUEST_URI'] == $route) return true;
    return false;
}

// Function to check if the current HTTP host matches the specified request
function HTTP($request)
{
    // Compare the HTTP host with the given request
    if ($_SERVER['HTTP_HOST'] == $request) return true;
    return false;
}



function Mobile($Device)
{
    // Compare the HTTP host with the given request
    if ($Device=='Linux' || $Device=='iPhone') return true;
    return false;
}
