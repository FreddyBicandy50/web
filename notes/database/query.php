<?php


class query
{
    public function get_all($connect, $database)
    {
        $result = $database->query(
            $connect,
            "SELECT notes.id as note_id , notes.note as content , notes.`date` , notes.due ,users.id as user_id, users.name,users.email,users.image
        FROM notes JOIN users ON notes.user_id = users.id"
        );
        return $result;
    }
    public function get_details()
    {
        //         $id = explode("=", $_GET['request']);
        //         $id = $id[1];
        //         return
        //             "SELECT notes.note as title , notes.Description as content ,notes.due as due
        // FROM notes
        // JOIN users ON notes.user_id = users.id
        // WHERE  notes.id=$id";
    }
}
