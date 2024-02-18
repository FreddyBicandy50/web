<?php

function object($validation_method, $sign_in_route, $main_route, $GET_email, $GET_password, $POST_email, $POST_password)
{
    return $object = [
        'full_validation_rule' => $validation_method,
        'sign_in' => $sign_in_route,
        'main' => $main_route,
        'POST_email' => $POST_email,
        'GET_email' => $GET_email,
        'POST_password' => $POST_password,
        'GET_password' => $POST_password
    ];
}
