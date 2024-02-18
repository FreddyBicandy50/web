<?php


class query
{
    public function get_all($connect, $database)
    {
        return $database->query(
            $connect,
            "SELECT notes.id as note_id , notes.note as content , notes.`date` , notes.due ,users.id as user_id, users.name,users.email,users.image
        FROM notes JOIN users ON notes.user_id = users.id WHERE users.id={$_SESSION['user_id']}"
        );
         
    }
    public function get_details($connect,$database)
    {
                 return $database->query($connect,
                    "SELECT notes.note as title , notes.Description as content ,notes.due as due
         FROM notes
         JOIN users ON notes.user_id = users.id
         WHERE  notes.id={$_GET['request']}");
    }

    public function get_users($connect,$database,$user)
    {
      return $database->query($connect,"SELECT id,email,password FROM users WHERE email='$user'");
       
    }
}
