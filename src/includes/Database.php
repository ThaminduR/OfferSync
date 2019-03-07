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

    public Database(){
        this->server = server;
        this->user = user;
        this->password = password;
        this->dbname = db;
        this->Connect(); 
    }
    private function Connect(){
        
    }
    public function Insert(){
        
    }
    
    public function Find(){

    }
}