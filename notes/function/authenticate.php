<?php

class authenticate
{
    //check user if authentic
    public function json_dump($object)
    {
        $myJSON = json_encode($object, true);
        $file_path = "notes/database/session_data.json";  // You may adjust the path based on your requirements

        file_put_contents($file_path, $myJSON);
        return true;
    }


    public function auth($object)
    {
        //check user email
        return
            $object['GET_password'] == $object['POST_password']
            ? true : (new authenticate)->validate(false);
    }

    public function validate($validation_key)
    {

        require("notes/partials/routes.php");

        if ($validation_key) {
            //SET Validation to true
            $_SESSION['valid'] = $_SESSION['auth'] = true;
            //Redirect to MAIN
            header(
                'location:' . $notes_router['main']
            );
        } else {
            //SET Validation to false
            $_SESSION['valid'] = $_SESSION['auth'] = false;
            //Redirect to Sign in
            header(
                'location:' . $notes_router['sign_in']
            );
            return false;
        }
    }
}
