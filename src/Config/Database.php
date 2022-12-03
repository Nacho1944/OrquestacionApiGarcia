<?php
    class Database {
        //Parametros para la base de datos 
        private $host = '172.18.0.1:3306';
        private $db_name = 'reticula';
        private $username = 'nacho';
        private $password = 'nacho10';
        private $conn;

        //Conectar la base de datos
        public function connect(){
            $this->conn = null; 

            try {
                $this->conn=new PDO('mysql:host='. $this->host. ';dbname=' . $this->db_name,
                $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Error de conexión: '. $e->getMessage();
            }

            return $this->conn;
        }
    }
