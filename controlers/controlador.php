<?php

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

     /**
      * Método para enviar los datos sacamos de la base de datos a la ventana de elegir 
      */
     Public function viewLaptop(){
        $datos = $this->laptop->getPortatil();
        echo $datos;
        require_once('../vistas/elegir.php');
     }


    }

    $cLaptop = new ControladorPortatil();

    $cLaptop->viewLaptop();


?>