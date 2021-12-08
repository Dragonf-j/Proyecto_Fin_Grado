<?php
require('usuario.php');
class userCrud
{
    private $conexion;
    private $host;
    private $users;
    private $password;
    private $consulta;
    private $nameDB;




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
           


        } catch (PDOException $exp) {
            return $exp->getMessage();
        }
    }

   
    public function anadir(user $usuario)
    {
        try {
            $s = 'INSERT INTO usuarios VALUES (:nombre, :Email, :Pass)';
            
            $this->consulta = $this->conexion->prepare($s);
            $this->consulta->execute(
                array(
                    ':nombre' => $usuario->getnombre(),
                    ':Email' => $usuario->getemail(),
                    ':Pass' => $usuario->getpass()
                )
            );
           
        } catch (PDOException $e) {

            exit($e->getMessage());
        }
    }

     public function InicioSesion($correo, $pass){
        try{
            $sentencia="SELECT nombre FROM usuarios WHERE (Email ='$correo') AND (Pass= '$pass')";
            $this->consulta = $this->conexion->prepare($sentencia);
            // echo 'Consulta realizada';
            // echo '<br>';
            $this->consulta->execute();
            $this->portatiles=$this->consulta->fetchAll(PDO::FETCH_ASSOC);

            $numero_registro = $this->consulta->rowCount();

            if($numero_registro!=0){
                session_start();
                $_SESSION["usuario"]=$correo;
                var_dump($_SESSION["usuario"]);
                echo "El usuario existe";
                return $this->portatiles;
            }else{
                header("Location:../inicio.php");
            }
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
}
}
?>