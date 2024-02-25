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
                !$object['encode']? 
                    json_decode(file_get_contents($file_path), true):''
            );
          
    }


    public function auth($object)
    {

        //check user email
        if ($object['hash'])

        return
            //verify password based on current hash and stored hash in db
            password_verify(
                //hash current password submit
                password_hash($object['POST_password'], PASSWORD_BCRYPT),
                $object['GET_password'] //db stored password
            ) ? true : (new authenticate)->validate(false); //!verify? do not validate;
        else return
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
            header('location:' . $notes_router['main']);
        } else {
            //SET Validation to false
            $_SESSION['valid'] = $_SESSION['auth'] = false;
            //Redirect to Sign in
            return URL($notes_router['REST'][1]) ? 
            header('location:' . $notes_router['register']) . $_SESSION['valid'] = true . $_SESSION['pass_match'] = false
                : header('location:' . $notes_router['sign_in']);
        }
    }
}
