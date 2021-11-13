<?php
    require_once('portatil.php');

    class PortatilCrud{
        private $conexion;
        private $host;
        private $users;
        private $password;
        private $consulta;
        private $portatiles;
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
            try{
    
                /**
                 * Datos de conexion
                 */
                $this->host='localhost';
                $this->nameDB='ordenadores';
                $this->users='root';
                $this->password='';
                //variable en que vamos a guardar los datos de las variables del host y del nameDb
                $dsn = 'mysql:host='. $this->host.';dbname='.$this->nameDB;
    
                $this->conexion = new PDO($dsn, $this->users, $this->password);//conexion 
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//extraccion y formateo de datos
                // echo 'Conexión Realizada';
                $this->portatiles=[];//array que contendra los datos
    
            }catch(PDOException $exp){
                return $exp->getMessage();
            }
        }
    
        public function getPortatil(){
            try{
                $sentencia='SELECT Tipo, ram, Precio_Amazon, Precio_Pccomponentes, imagen FROM portatil ';
                $this->consulta = $this->conexion->prepare($sentencia);
                // echo 'Consulta realizada';
                // echo '<br>';
                $this->consulta->execute();
                $this->portatiles=$this->consulta->fetchAll(PDO::FETCH_ASSOC);
                //var_dump($this->portatiles);
                return $this->portatiles;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            
          
    
        }
        //Metodo para actualizar la base de datos
        
        public  function update($nombre_imagen){

            try{
                echo $nombre_imagen;
            $sentencia = "UPDATE portatil SET imagen='$nombre_imagen' WHERE id = 3";
            $this->consulta =$this->conexion->prepare($sentencia);
            $this->consulta->execute();
            echo 'aqui llega';

            }catch(PDOException $e){
                echo $e->getMessage();
            }
           


           
         
        }

        public function ContarLaptop(){
            try{
                $sentencia = 'SELECT COUNT(id) FROM portatil';
                $this->consulta=$this->conexion->prepare($sentencia);
                $this->consulta->execute();
                $datos = $this->consulta->fetchAll(PDO::FETCH_ASSOC);
                require_once('../vistas/Vistas_dinamicas/contar.php');
                $r = contar::rercorrer($datos);
                $numero =  random_int(1, $r);
                return $numero;
            // usar un bucle apara que haga la snetencia seis veces, el numero lo coge de forma aleteroia

            // for($i=0; $i<=$numero; $i++){
            //     $sentencia = '';
            // }

            }catch(PDOException $e){
                echo $e->getMessage(); 
            }

        }


        // public function ViewRandom(){
        //     $numero = .ContarLaptop();
        //     $sentencia = '';
        // }

    
    }

?>