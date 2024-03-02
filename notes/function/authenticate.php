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

        require("notes/partials/routes.php"); //notes directory and notes routers

        
        //if user trying to register and got unmatched password
        URL($notes_router['REST'][1]) ?
            header('location:' . $notes_router['register']) . //return to register 
            $_SESSION['valid'] = true . $_SESSION['pass_match'] = false //display err message
            : //else
            //if user trying to sign in and had wrong password
            header('location:' . $notes_router['sign_in']); //go back to main

        $validation_key ? //is valid?
            $_SESSION['valid'] = $_SESSION['auth'] = true . //open the gates
            //Redirect to MAIN user page
            header('location:' . $notes_router['main'])
            : //else
            //make sure gates are closed and display a error message
            $_SESSION['valid'] = $_SESSION['auth'] = false .
            //Stay in Sign in or Register
            URL($notes_router['REST'][1]) ?
            //if user trying to register and got unmatched password
            header('location:' . $notes_router['register']) . //return to register 
            $_SESSION['valid'] = true . $_SESSION['pass_match'] = false //display err message
            : //else
            //if user trying to sign in and had wrong password
            header('location:' . $notes_router['sign_in']); //go back to main

    }
}
