<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="login_test2";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  $_SESSION['error']= "Connection failed: " . $e->getMessage();
}
?>

<?php

class DatabaseConnection {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "login_test2";
    public $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        } catch(PDOException $e) {
            $_SESSION['error'] = "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

?>
