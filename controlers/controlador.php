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
      * Método para enviar los datos sacamos de la base de datos a la ventana de elegir, debemos hacer un returns apra que nos devuelva los datos
      */
     Public function viewLaptop(){
        $datos = $this->laptop->getPortatil();
        echo('<pre>');
        var_dump($datos);
        /*Este var_dump es una prueba de depuración para comprobar que los datos estan en la variable
        */
        
        require_once('../vistas/elegir.php');
        return $datos;
     }


    }

    $cLaptop = new ControladorPortatil();

    $cLaptop->viewLaptop();


?>