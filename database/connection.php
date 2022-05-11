<?php
    class Database {
        private $username = "root";
        private $password = "Iz209385";
        private $host = "localhost";
        private $database = "sestavsibednu";

        private mysqli $connection;

        public function __construct() {
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            if($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
        }

        public function getConnection() :  mysqli {
            return $this->connection;
        }
    }
?>