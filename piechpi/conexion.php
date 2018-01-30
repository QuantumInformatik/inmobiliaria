<?php 
 class Conexion extends PDO { 
    private $typebd = 'mysql';
    private $host = 'localhost';
    private $bd = 'crud';
    private $usuario = 'root';
    private $contrasena = 'putas-1997'; 

    public function __construct() {
       try{
          parent::__construct($this->typebd.':host='.$this->host.';dbname='.$this->bd, $this->usuario, $this->contrasena);
       }catch(PDOException $e){
        print "¡Error!: " . $e->getMessage() . "<br/>";
       }
    } 

    // public function estadoCon($estado){
    //     if($estado == true){
    //         return true;
    //     }else{
    //         return false;
    //         exit();
    //     }


    // }
  
   

} 


?>