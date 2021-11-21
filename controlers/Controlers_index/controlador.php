<?php

class controlerIndex{
    private $cIn;

    public function __construct()
    {
        require_once('..../models/portatilesCurd.php');
        $this->cIn = new PortatilCrud();
    }

    public function ramdon(){
        echo 'aqui llega';
        $this->cIn->ContarLaptop();
        
    }


}


?>

