<?php
namespace src\models;
class DB
{
    public $db;

    public function __construct()
    {
        $this->db = $this->getConnection();
    }

    function getConnection()//Permet connection à base de donnée
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'BP2';
        $dsn = "mysql:host=$host;dbname=$dbname";
        try {
        
            $db = new \PDO($dsn, $user, $password);
            
        }catch(PDOException $ex){
            die ('Error : '.$ex->getMessage());
        }
        return $db;
    }
}


?>