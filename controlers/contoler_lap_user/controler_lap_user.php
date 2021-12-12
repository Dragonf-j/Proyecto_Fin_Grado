<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/Dragonf/proyecto/vistas/Vistas_dinamicas/montarTabla.php');
class controler{
    protected $lapUser;
    protected $lap;




    public function __construct()
    {
        require_once($_SERVER['DOCUMENT_ROOT'].'/Dragonf/proyecto/models/model_laptop_user/userLapCrud.php');
        $this->lapUser = new userLapCrud();
        require_once($_SERVER['DOCUMENT_ROOT'].'/Dragonf/proyecto/controlers/controlador.php'); 
      
        $this->lap = new ControladorPortatil;
      
       
    }


    public function rergistrar(){
        session_start();
      
         $user= $_SESSION["usuario"];
         if(!isset($user)){
            echo "sin usuarios";
         }else{
           echo $user;
           $datos=  $this->lap->mostrar();
           var_dump($this->lap->mostrar());
             montarTabla::montarIndex($datos);

         }
       
    }

}

$lpus = new controler();

$lpus->rergistrar();


