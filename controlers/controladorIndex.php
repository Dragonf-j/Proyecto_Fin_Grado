<?php
class controlerIndex{
    private $laptopIndex;

    public function __construct()
    {
        require_once('../models/portatilesCurd.php');
        $this->laptopIndex = new PortatilCrud();
    }

    public function random(){
       $this->laptopIndex->ContarLaptop();
       }

}
?>