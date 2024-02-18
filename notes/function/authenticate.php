<?php

class authenticate
{
    public function auth($object)
    {
        if ($object['GET_email'] == $object['POST_email']) {
            if ($object['full_validation_rule'])
                return $object['GET_password'] == $object['POST_password'] ? true : (new authenticate)->validate(false);
            return true;
        }
        return false;
    }
    public function validate($validation_key)
    {
        require("notes/partials/routes.php");
        if ($validation_key) {
            $_SESSION['valid'] = $_SESSION['auth'] = true;
            header('location:' . $notes_router['main']);
        } else {
            $_SESSION['valid'] = $_SESSION['auth'] = false;
            header('location:' . $notes_router['sign_in']);
        }
    }
}
