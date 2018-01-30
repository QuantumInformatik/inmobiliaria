<?php 
    require_once 'login.php';
    session_start();

    $objLogin = new Login();
    $objLogin->acceso();
    exit;
    
  




// $bd =  new Conexion();
// $user=$_POST['username'];
// $pass=$_POST['password'];
// $usuarios= $bd->query("SELECT * FROM tblusuarios WHERE usuarioPASS = '$pass' && usuarioUS = '$user' ")->fetchALL(PDO::FETCH_OBJ);
// $cantidad = count($usuarios);

// if($cantidad > 0){
//     session_start();
//     $_SESSION["user"]=$usuarios[0]->usuarioUS;
//     $_SESSION["pass"]=$usuarios[0]->usuarioPASS;
//     $_SESSION["nom"]=$usuarios[0]->usuarioNOM;
//     $_SESSION["est"]=$usuarios[0]->usuarioEST; 
//     $datos[] = array('user'=>$_SESSION["user"],'pass' =>$_SESSION["pass"],'nom' =>$_SESSION["nom"],'est' =>$_SESSION["est"],'sesion'=>'1');
// }else{
//     $datos[] = array('sesion'=>'0');
// }

// echo json_encode($datos);





/* $dsn = 'mysql:dbname=crud;host=localhost';
  $usuario = 'root';
  $contrasena = 'putas-1997';
  $bd =new PDO($dsn, $usuario, $contrasena); */
?>
