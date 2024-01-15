<?php

class Connection {
    // Attributes
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $connection;

    // Constructor para crear un Objeto Conexión --> $con = new Connection();
    public function __construct(){
        $dbData = "mysql:host={$this->server};dbname=projects";
        try {
            $this->connection = new PDO($dbData, $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Method in order to execute SQL statements
    public function execute_sql($sql) {
        try {
            $sqlPrepared = $this->connection->prepare($sql);
            $sqlPrepared->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Use this function when you want to do SELECT from * table statements
    public function retrieve_data($sql) {
        try {
            $sqlPrepared = $this->connection->prepare($sql);
            $sqlPrepared->execute();
            $retrieve = $sqlPrepared->fetchAll();

            return $retrieve;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}

// $con = new Connection();
// $con->execute_sql("SELECT * FROM project");



?>