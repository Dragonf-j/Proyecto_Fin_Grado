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

  
 
   //   public function mostrar(){
   //    $datos = $this->laptop->getPortatil();
   //    montarTabla::montar($datos);
   //   }




   public function mostrar(){
            if(isset($_POST['tipos'])){
               $tipo = $_POST['tipos'];
            
               
            }else{
               return;
            }
            if(isset($_POST['almacenamiento'])){
               $almacenamiento = $_POST['almacenamiento'];
              
            }
            if(isset($_POST['memoria'])){
               $ram = $_POST['memoria'];
               
            }else{
               return;
            }
            if(isset($_POST['precio'])){
               $precio = $_POST['precio'];
            }
            if(isset($_POST['Pulgadas'])){
               $pulgadas = $_POST['Pulgadas'];
               
            }
            
           
            
            
            $datos = $this->laptop->getPortatil($tipo, $ram, $precio, $pulgadas);
            
            montarTabla::montar($datos);
        }


     public function act($nombre_imagen){
        require_once('./proyecto/vistas/vistas_privadas/imagenes.php');
         $this->laptop->update($nombre_imagen);
        

     }
    
     


    }

    $cLaptop = new ControladorPortatil();

    


    if(isset($_POST['mostrar'])){
      // $cLaptop->random();
      $cLaptop->mostrar();
    }


    
    

   
  
 
