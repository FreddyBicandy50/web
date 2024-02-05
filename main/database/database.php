<?php
class Database
{

    private $hostname, $username, $password, $database_name, $port = '3306';
    public function __construct($db_name, $testing, $Host)
    {
        $this->database_name = $db_name;
        # Connection details for local environment
        if ($testing) {
            $this->hostname =  "192.168.0.109";
            $this->username = "null";
            $this->password = "@1120338#7";
        } else {
            # Connection details for remote environment
            $this->hostname = "sql310.infinityfree.com";
            $this->username = "if0_35693876";
            $this->password = "b1tVbXNmF9rYT";
        }
    }
    public function connect()
    {
        # Return the database connection for the remote environment
        return mysqli_connect($this->hostname, $this->username, $this->password, $this->database_name, $this->port);
    }
    public function query($connection, $query)
    {
        return mysqli_query($connection, $query);
    }
}
