<?php
require_once('/xampp/htdocs/Dragonf/proyecto/vistas/Vistas_dinamicas/montarTabla.php');
class controlerIndex{
    private $cIn;
    private $cInH;

    public function __construct()
    {
        require_once("/xampp/htdocs/Dragonf/proyecto/models/portatilesCurd.php");
        $this->cIn = new PortatilCrud();
        require_once("/xampp/htdocs/Dragonf/proyecto/models/usuarioCRud.php");
        $this->cInH = new userCrud();

    }

    public function ramdon(){
        $datos = $this->cIn->ContarLaptop();

         montarTabla::montarIndex($datos);
     
        
    }

    public function historico(){
      
        // $dadtos = $this->cInH->historico();
        // montarTabla::montarIndex($dadtos);
    }


}






?>

