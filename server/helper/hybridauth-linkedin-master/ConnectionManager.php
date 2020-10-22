<?php
// Interacts with Database Directly 
class ConnectionManager {

    public function connect() {
        $servername = 'localhost';
        $username = 'root';
        $password = 'root'; //MAMP pls make changes
        $dbname = 'phriscoskitt';
        // $port = '3306';
        
        // Create connection
        $conn = new PDO("mysql:host=$servername;
            dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // if fail, exception will be thrown

        // Return connection object
        return $conn; // PDO
    }
    

}