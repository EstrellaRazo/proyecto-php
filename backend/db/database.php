<?php
    class Database{
        private $conn;

        public function __contruct () {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if($this->conn->connect_error)
            {
                die('Error de conexión' . this->conn->connect_error);
            }
        }

        public function getConnection() {
            return this->conn;
        }
        
    }
?>