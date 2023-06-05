<?php
// DatabaseConnector class
class DatabaseConnector
{
 
    private $servername = 'localhost';

    
    private $username = 'root';

   
    private $password = '';

    
    private $dbname = 'stayinn';

    
    private $conn;

   
    public function __construct()
    {
      
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

       
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Returns the connection object
    public function getConnection()
    {
        return $this->conn;
    }
}
