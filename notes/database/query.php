<?php


class query
{

    public function get_all($connect, $database)
    {
        //return all user information from database 
        return
            $database->query(
                $connect,
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

    public function get_users($connect, $database, $user)
    {
        //return all users credentials from database 
        return
            $database->query(
                $connect,
                "SELECT 
                    *
                FROM users 
                WHERE email='$user'"
            );
    }
    public function set_users($connect, $database, $user)
    {
        //return all users credentials from database 
        return
            $database->query(
                $connect,
                "SELECT 
                    id,
                    email,
                    `password` 
                FROM users 
                WHERE email='$user'"
            );
    }
    public function set_details($connect, $database, $user_id, $title,$due,$desc,$getdate)
    {

        //return all users credentials from database 
        return
            $database->query(
                $connect,
                "INSERT INTO `notes`(`note`, `user_id`,`Description`,`due`,`date`) VALUES ('$title','$user_id','$desc','$due','$getdate')"
            );
    }
}