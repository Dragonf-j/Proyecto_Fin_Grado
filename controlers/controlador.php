<?php
require_once('../vistas/Vistas_dinamicas/montarTabla.php');
/**
 * clase que controla el funcionamiento entre la web y la base de datos
 */
    class ControladorPortatil{
      private $laptop;
      
/**
 * Constructor de la clase que inicializa la clase PortailCRUD
 */
     public function __construct()
     {
         require_once('../models/portatilesCurd.php');
        $this->laptop = new PortatilCrud();
     }

  
 
     public function mostrar(){
      $datos = $this->laptop->getPortatil();
      montarTabla::montar($datos);
     }


     public function act($nombre_imagen){
        require_once('./proyecto/vistas/vistas_privadas/imagenes.php');
         $this->laptop->update($nombre_imagen);
        

     }
    
     public function random(){
      $this->laptop->ContarLaptop();
     
     }


    }

    $cLaptop = new ControladorPortatil();

    if(isset($_POST['mostrar'])){
      echo 'El boton funciona';
      $cLaptop->mostrar();
    }

   
  
 
