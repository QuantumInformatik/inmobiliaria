<?php 
require_once 'conexion.php';

class Login{
    private $user;
    private $pass;
    //public $nom;

    public function acceso(){
        try{
            if(!empty($_POST['username']) and !empty($_POST['password'])){
                $bd = new Conexion();
                $this->user= $bd->quote($_POST['username']);
                $this->pass = $bd->quote($_POST['password']);
                $sql = $bd->prepare("SELECT * FROM tblusuarios WHERE usuarioPASS = $this->pass && usuarioUS = $this->user ");
                $sql->setFetchMode(PDO::FETCH_OBJ);
                $sql->execute();
                $datos=$sql->fetchALL();
                $cantidad = count($datos); 
            
                if( $cantidad > 0){
                    if($datos[0]->usuarioEST != 1){
                        $newEst = $datos[0]->usuarioID;
                        $bd->query("UPDATE tblusuarios SET usuarioEST=1 WHERE usuarioID='$newEst' ");
                        $_SESSION["id"]=$datos[0]->usuarioID;
                        $_SESSION["user"]=$datos[0]->usuarioUS;
                        $_SESSION["pass"]=$datos[0]->usuarioPASS;
                        $_SESSION["nom"]=$datos[0]->usuarioNOM;
                        $_SESSION["est"]=$datos[0]->usuarioEST; 
                        $datosJson[] = array('user'=>$_SESSION["user"],'pass' =>$_SESSION["pass"],'nom' =>$_SESSION["nom"],'est' =>$_SESSION["est"],'sesion'=>'1');
                    }else{
                        $datosJson[]=array('sesion'=>'3');
                    } 
                }else{
                    $datosJson[] = array('sesion'=>'0');
                }
                echo json_encode($datosJson);           
            }else{
                // throw new Exception('Error campos vacios.');
                $errorJson[]=array('sesion'=>'2', 'error'=>'Campos vacios.');
                $objJson= json_encode($errorJson);
                echo $objJson;
            }

        }catch(Exception $e){
            echo  $e->getMessage();
        }
    }


    public function bienvenidoAdmin(){
        session_start();
        if(empty($_SESSION['user']) OR empty($_SESSION['pass'])){ 
            session_destroy();	
            header("location:index"); 
        } 
        $usuario=$_SESSION['nom'];
        echo "Bienvenido admin: " . $usuario;
    }

    public function cerrarAdmin(){
        $bd  =  new Conexion();
        session_start();
        $newEst = $_SESSION['id'];
        $bd->query("UPDATE tblusuarios SET usuarioEST=0 WHERE usuarioID='$newEst' ");
        unset($_SESSION['id'],$_SESSION['user'],$_SESSION['pass'],$_SESSION['nom'],$_SESSION['est']);
        session_destroy();
        header("location:../index");
    }

}

?>