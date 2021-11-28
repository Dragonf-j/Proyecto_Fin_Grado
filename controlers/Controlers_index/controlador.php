<?php
require_once('/xampp/htdocs/Dragonf/proyecto/vistas/Vistas_dinamicas/montarTabla.php');
class controlerIndex{
    private $cIn;

    public function __construct()
    {
        require_once("/xampp/htdocs/Dragonf/proyecto/models/portatilesCurd.php");
        $this->cIn = new PortatilCrud();
    }

    public function ramdon(){
        $datos = $this->cIn->ContarLaptop();
     
         montarTabla::montar($datos);
        
        
    }


}






?>

