<?php
class test_db
{
    private $hostname, $username , $password ,$database_name, $port;
    public function __construct($db_name, $testing)
    {
        # Connection details for local environment
        if ($testing) {
            $this->hostname = 'raspberrypi.tail4bb6a.ts.net';
            $this->username = "null";
            $this->password = "@1120338#7";
            $this->database_name = $db_name;
            $this->port = '3306';
        } else {
            # Connection details for remote environment
            $this->hostname = "sql310.infinityfree.com";
            $this->username = "if0_35693876";
            $this->password = "b1tVbXNmF9rYT";
            $this->database_name = $db_name;
            $this->port = '3306';
        }
    }
    public function connect()
    {
        # Return the database connection for the remote environment
        return mysqli_connect($this->hostname, $this->username, $this->password,$this->database_name, $this->port);
    }
    public function query($connection, $query)
    {
        return mysqli_query($connection, $query);
    }
}
