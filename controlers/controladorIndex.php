<?php
class controlerIndex
{
    private $laptopIndex;



    public function __construct()
    {
        require_once('/xampp/htdocs/Dragonf/proyecto/models/portatilesCurd.php');
        $this->laptopIndex = new PortatilCrud();
    }

    public function random()
    {
        echo "aqui llega controlador";
        $this->laptopIndex->ContarLaptop();
    }



}
