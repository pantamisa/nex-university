<?php

namespace Model;

use PDO;
use PDOException;

class Conection {
    private $server;
    private $user;
    private $password;
    public $conn;

    public function openConection() {
        try {
            $this->server = 'mysql:host=localhost;dbname=universidad'; 
            $this->user = 'root';
            $this->password = '2FiuRAVNaa@XQJjch#t8G';
            $this->conn = new PDO($this->server, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch(PDOException $e) { 
            echo 'Fallo conexión en: ' . $e->getMessage();
        }
    }

    public function closeConection() {
        $this->conn = null;
    }
}