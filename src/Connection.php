<?php
namespace App;
use PDO;
use PDOException;

class Connection{

    public $mysql; 

    public function __construct()
    {
        try {
            $this->mysql = $this->getConnection();
        } catch (PDOException $ex) {
            echo $ex->getMessage('hola');
        }
    }
    
    private function getConnection()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "coolders";
        $charset = "utf-8";

        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new PDO("mysql:host={$host};dbname={$database};charset{$charset}", $user, $password, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}

?>