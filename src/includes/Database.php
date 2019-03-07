<?php
//TODO : implement database library (PDO)
//NOTE : If a function is needed comment it here
require_once $_SERVER['DOCUMENT_ROOT']. '/..'. '/src/includes/database_config.php';

class Database{
    private $Database;
    private $server;
    private $user;
    private $password;
    private $dbname;
    private $connection;

    public Database(){
        this->server = server;
        this->user = user;
        this->password = password;
        this->dbname = db;
        this->Connect(); 
    }
    private function Connect(){
        $this->connection = new mysqli($this->server, $this->user, $this->password, $this->dbname);
        if(mysqli_connect_errno()) {
            echo "Error: Could not connect to database.";
                exit;
        }
        
    }
    //Insert function - required parameter is an array of the data to to be inserted.
    public function Insert($){
        
    }
    
    public function Find(){

    }
}