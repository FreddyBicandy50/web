<?php
# Function to establish a database connection based on the server environment
class Database 
{
    public function __construct(){
        return('test');
    }
    public function connect($db_name, $testing)
    {
        $hostname = $username = $password = $database_name = $port = '';
        if ($testing) {
            # Connection details for local environment
            $hostname = "raspberrypi.tail4bb6a.ts.net";
            $username = "null";
            $password = "@1120338#7";
            $database_name = $db_name;
            $port = '3306';
        } else {
            # Connection details for remote environment
            $hostname = "sql310.infinityfree.com";
            $username = "if0_35693876";
            $password = "b1tVbXNmF9rYT";
            $database_name = $db_name;
            $port = '3306';
        }
        # Return the database connection for the remote environment
        return mysqli_connect($hostname, $username, $password, $database_name, $port);
    }
    public function query($connection,$query){
        return mysqli_query($connection,$query);
    }
}
