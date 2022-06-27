<?php

class Dbh {
    protected $hostname = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "zuriphp";
    

    protected function connect(){
        $conn =  mysqli_connect($this->hostname, $this->username,$this->password,$this->dbname);
         if (!$conn){
            echo "<script> alert('Error connecting to the database') </script>";
         }
        return $conn;
    }
}

?>


