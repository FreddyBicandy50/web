<?php

class authenticate
{
    //check user if authentic
    public function json_dump($object)
    {
        $file_path = "notes/database/data.json";  // json file path
        //dump the content (path,encode the array into a json object)    
        return $object['encode'] ?
            file_put_contents(
                $file_path,
                json_encode($object, true)
            )
            : (
            !$object['encode'] ?
                json_decode(file_get_contents($file_path), true) : ''
            );
    }


    public function auth($object)
    {
        //check user email
        return password_verify(
            $object['POST_password'],
            $object['GET_password']
        ) ? (new authenticate)->validate(true) : (new authenticate)->validate(false);
    }


    public function validate($validation_key)
    {

        require("notes/partials/routes.php"); //notes directory and notes routers


        if ($validation_key)  //is valid?
        {
            $_SESSION['valid'] = true;
            $_SESSION['auth'] = true; //open the gates
            die(header('location:' . $notes_router['main']));
        } else {
            //make sure gates are closed and display a error message
            if (URL($notes_router['REST'][1])) {
                //Stay in Sign in or Register
                //if user trying to register and got unmatched password
                $_SESSION['valid'] = true;
                $_SESSION['pass_match'] = false; //display err message
                die(header('location:' . $notes_router['register']));//return to register 
            } else {
                $_SESSION['valid'] = $_SESSION['auth'] = false;
                //if user trying to sign in and had wrong password
                die(header('location:' . $notes_router['sign_in'])); //go back to main
            }
        }
    }
}
