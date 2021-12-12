<?php
require_once('lap_user.php');
class userLapCrud{
    private $conexion;
    private $host;
    private $users;
    private $password;
    private $consulta;
    private $nameDB;
    private $userLap;



    /**
     * Metodo constructor ppara la conexion de la base de datos
     * En este metodo instacioamos el metodo PDO en una variable y a esta instacia debemos pasarle los datos del host
     * donde se localiza la base de datos, el usuario con el que se va a conectar, el nombre de la base de datos,
     * y la contraseña de la base datos.
     * Tambien instanciamos el array que va a contener los datos 
     * 
     */
    public function __construct()
    {
        try {

            /**
             * Datos de conexion
             */
            $this->host = 'localhost';
            $this->nameDB = 'ordenadores';
            $this->users = 'root';
            $this->password = '';
            //variable en que vamos a guardar los datos de las variables del host y del nameDb
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->nameDB;

            $this->conexion = new PDO($dsn, $this->users, $this->password); //conexion 
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //extraccion y formateo de datos
            // echo 'Conexión Realizada';
            $this->userlap=[];


        } catch (PDOException $exp) {
            return $exp->getMessage();
        }
    }



    public function anadir(laptopuser $lapu){

        try{
            $sentancia = 'INSERT INTO portatiles_has_user VALUES(:email_user, id_portatil)';

            $this->consulta = $this->conexion->prepare($sentancia);
            $this->consulta->execute(
                array(
                    ':email_user'=> $lapu->getIDUSer(),
                    ':id_portatil'=>$lapu->getIDLaptop()
                )
            );

        }catch(PDOException $e){
            exit($e->getMessage());
        }
    }

    public function mostrar(){
        try{
            $sentancia = 'SELECT  email_user, id_portatil, historico FROM portatiles_has_user';
            $this->consulta = $this->conexion->prepare($sentancia);
            $this->consulta->execute();
            $this->userLap=$this->consulta->fetchAll(PDO::FETCH_ASSOC);
            return $this->userLap;
        }catch(PDOException $e){
            exit($e->getMessage());
        }
    }




}
?>