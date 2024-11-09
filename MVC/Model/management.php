<?php
namespace org;

require_once 'C:\wamp64\www\universidad nex - copia5\MVC\Model\Conection.php';

use Model\Conection as BbdConection;
use PDO;
use PDOException;

class management  extends BbdConection {
    private $id;
    private $name ;
    private $cedula ;
    private $roleid ;
    private $celular ;
    private $userPassword; 
    private $idcarrera; 


    public function insertUser() {
        $this->openConection();
        $query = "INSERT INTO usuarios (nombre_completo, cedula, role_id, celular, clave, carrera_id) VALUES (:nombre_completo, :cedula, :role_id, :celular, :clave, :carrera_id)";
        $statement = $this->conn->prepare($query);
        $statement->execute([
            ':nombre_completo' => $this->name,
            ':cedula' => $this->cedula,
            ':role_id' => $this->roleid,
            ':celular' => $this->celular,
            ':clave' => password_hash($this->userPassword, PASSWORD_BCRYPT, ['cost' => 12]), // Cambiado a $this->userPassword
            ':carrera_id' => $this->idcarrera
        ]);
        echo "Usuario insertado correctamente.";
        $this->closeConection();
    }
}

$db = new management();
$db->insertUser();