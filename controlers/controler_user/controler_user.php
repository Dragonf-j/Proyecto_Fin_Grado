<?php
  
class controler{
    private $user;
 

    public function __construct()
    {
        require_once("../../models/usuarioCRud.php");
        $this->user = new userCrud();
      
       
    }

    public function registrar(){
        
        if(isset($_POST['nombre'])){
            $nombre = $_POST['nombre']; 
         }
         if(isset($_POST['correo'])){
            $correo = $_POST['correo'];
         }
         if(isset($_POST['contra'])){
            $contra = $_POST['contra'];
         }
     
        echo 'echo usuarrios creados';
        var_dump($nombre);
        var_dump($contra);
        var_dump($correo);
        $user = new user($nombre, $correo, $contra);
        var_dump($user);
        $this->cIn->anadir($user);
    }

    public function conectar(){
        if(isset($_POST['correo'])){
            $correo = $_POST['correo'];
           
         }
         if(isset($_POST['contra'])){
            $contra = $_POST['contra'];
            
         }
         $datos =  $this->user->InicioSesion($correo, $contra);
         
         foreach ($datos as $key => $value) {
            $nombre = $value['nombre'];
        }

        
        
         
    }
}


?>