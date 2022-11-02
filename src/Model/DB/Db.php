<?php

namespace App\Model\DB;

use \PDO;

class Db
{
    private $host = 'localhost:3306';
    private $user = 'root';
    private $pass = 'my-secret-pw';
    private $dbname = 'adverts_api';

   
    public function connect(){
        $conn_str = "mysql:host=$this->host;dbname=$this->dbname";
        $conn = new PDO($conn_str, $this->user, $this->pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}