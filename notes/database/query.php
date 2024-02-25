<?php
/*
THIS CLASS IS USED TO:
    send query's to database
*/

class query
{
    //Fetch all notes from database
    public function get_all($connect, $database)
    {
        //return all user information from database 
        return
            //database class -> 
            $database->query(
                $connect,
                //QUERY
                "SELECT 
                    notes.id as note_id , 
                    notes.note as content, 
                    users.id as user_id, 
                    notes.`date` , 
                    notes.due ,
                    users.name,
                    users.email,
                    users.image
                FROM notes 
                JOIN users ON notes.user_id = users.id 
                WHERE users.id={$_SESSION['user_id']}"
            );
    }

    //Get notes descriptions
    public function get_details($connect, $database)
    {
        //return all note description from notes database 
        return
            $database->query(
                $connect,
                "SELECT 
                notes.note as title ,
                notes.Description as content ,
                notes.due as due
            FROM notes
            JOIN users ON notes.user_id = users.id
            WHERE  notes.id={$_GET['request']}"
            );
    }
    //get fetch user email
    public function get_users($connect, $database, $user)
    {
        //return all users credentials from database if email submitted is found
        return
            //database class -> 
            $database->query(
                $connect,
                //QUERY
                "SELECT 
                    *
                FROM users 
                WHERE email='$user'"
            );
    }
    //create new user
    public function set_user($connect, $database, $user)
    {
        //return insert new user into database 
        $password = password_hash($user['password'], PASSWORD_BCRYPT); //password encryption
        return
            //database class -> 
            $database->query(
                $connect,
                //QUERY
                "INSERT 
                INTO `users`(`name`, `email`, `password`) 
                VALUES (
                        '{$user['name']}',
                        '{$user['email']}',
                        '{$password}'
                        )"
            );
    }

    //create new note
    public function set_details($connect, $database, $user_id, $title, $due, $desc, $getdate)
    {

        //insert new notes in the database 
        return
            //database class -> 
            $database->query(
                $connect,
                //QUERY
                "INSERT 
                INTO 
                `notes`(
                        `note`, 
                        `user_id`,
                        `Description`,
                        `due`,
                        `date`
                    ) 
                VALUES (
                        '$title',
                        '$user_id',
                        '$desc',
                        '$due',
                        '$getdate'
                    )"
            );
    }

    //deletion a note
    public function del_note($connect, $database, $note_id, $main)
    {

        header("location:" . $main); //route to to main page
        //then delete requested note based on its id {$note_id}
        return
            //database class -> 
            $database->query(
                $connect,
                //QUERY
                "DELETE 
                FROM 
                    `notes`
                WHERE 
                    `id`=$note_id"
            );
    }
}
