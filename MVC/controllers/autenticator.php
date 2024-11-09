<?php
namespace auten;

require_once '../autoload.php';
use PDO;
use Model\Conection as BbdConection;

class autenticator extends BbdConection  {

    public $mng;

    function __construct() {
        
    }
    public function login($userr2, $password2){
        if (isset($_POST['user']) && isset($_POST['password'])) {
            //$userr = $_POST['user'];
            echo 'si pasa';
           

            $this->openConection();
            $query="SELECT id, nombre_completo, clave FROM usuarios WHERE nombre_completo=:name ";

            $statement=$this->conn->prepare($query);
            $statement->bindParam(':name',$userr);
            $statement->execute();
            $result =$statement->fetch();
            echo json_encode($result);
            $menssge='';
            if (count($result)>0 && password_verify($_POST['password'] , $result['clave'])) {
                header('.\MVC\View\page._general.php');
            }else{
                header('.\MVC');
            }
        
        }
    }
}


$autenticadorInstanse=new autenticator();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $userr=$_POST['user'];
    $password=$_POST['password'];
    $autenticadorInstanse->login($userr,$password);
}

