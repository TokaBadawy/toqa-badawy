<?php
namespace App\DataBase\Config;

use mysqli;

class Connection{

    private $DBserverName = 'localhost';
    private $DBuserName = 'root';
    private $DBpassword='';
    private $DBdatabaseName = 'ecommerce';
    private $DBport=3306;
    public $conn;

    public function __construct() {
        $this->conn = new \mysqli($this->DBserverName,$this->DBuserName,$this->DBpassword,$this->DBdatabaseName);
        // if( $this->conn->connect_error){
        //     die("Connection failed:  " .$this->conn->connect_error);

        // }
        // die("Connection successful");
    }

    public function __destruct() {
        $this->conn->close();
    }



}
 new Connection;




?>