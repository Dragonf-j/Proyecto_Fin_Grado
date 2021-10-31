<?php
require_once('../vistas/Vistas_dinamicas/montarTabla.php');
/**
 * laase que controla el funcionamiento entre la web y la base de datos
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

    


    }

    $cLaptop = new ControladorPortatil();

    if(isset($_POST['mostrar'])){
       echo 'El boton funciona';
      $cLaptop->mostrar();
    }
  
 
