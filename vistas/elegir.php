<!DOCTYPE html>
<html>


<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src='../javaScript/elegir.js'></script>
    <script src='../javaScript/ajax.js'></script>
    <link rel="stylesheet" href="../estilos/estilos.css">

</head>
<style>
    .grid {
        display: grid;
        grid-template-columns: 45% 45%;
    }

    #boton {
        display: inline;
    }
    .icon span{
        transition: .4s ease-in-out all;
        position: absolute;
        left: 40%;

    }
    .icon:hover span{
        left: 20px;
    }

</style>

<body>
    <header class="container-fluid cabecera">
        <div>
            <h1>Elige tu portatil</h1>
            <nav class="col-sm-3 p-3 rounded-pill ">

                <ul class="nav nav-pills  justify-content-center">
                    <li class="nav-item col-sm-4   ">
                        <a href="../index.php" class="nav-link active  ">Inicio</a>
                    </li>
                    <li class="nav-item col-sm-4 ">
                        <a href="tipos.php" class="nav-link active ">Tipos portatiles</a>
                    </li>
                    <li class="nav-item col-sm-4 ">
                        <a href="elegir.php" class="nav-link active ">Elige tu portatil</a>
                    </li>
                </ul>






            </nav>
        </div>

    </header>

    <div>
        <div class="container bg-light d-flex flex-column justify-content-around ">
            <form action="" method="POST" class="grid">
                <div class="form-check " id="tipos">
                    <label for="Tipo">Tipos de portatiles</label><br>
                    <label for="gaming">Portatil gaming</label>
                    <input type="radio" class="form-check-input" class="tipos" onclick="mostrar(0) " name="tipos">
                    <br>
                    <label for="simple">Portatil basico</label>
                    <input type="radio" class="form-check-input" class="tipos" onclick="mostrar(1)" name="tipos">
                    <br>
                    <label for="edi">Portatil edicion</label>
                    <input type="radio" class="form-check-input" class="tipos" onclick="mostrar(2)" name="tipos">
                    <br>
                    <label for="ultra">Portatil Ultrabook</label>
                    <input type="radio" class="form-check-input" class="tipos" onclick="mostrar(3)" name="tipos">
                    <br>
                    <label for="dosenuno">Portatil 2 en 1</label>
                    <input type="radio" class="form-check-input" class="tipos" onclick="mostrar(3)" name="tipos">

                </div>



                <div class="form-check" id="almacenamiento">
                    <label for="Almacenamiento">Almacenamiento</label><br>
                    <label for="menos">250 GB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento">
                    <br>
                    <label for="medio">500 GB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento">
                    <br>
                    <label for="max">1 TB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento">
                    <br>
                    <label for="max-extend">+1 TB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento">
                </div>

                <div class="form-check" id="ram">
                    <label for="ram">RAM</label><br>
                    <label for="menos">4 GB</label>
                    <input type="radio" class="form-check-input" name="memoria">
                    <br>
                    <label for="medio">8GB</label>
                    <input type="radio" class="form-check-input" name="memoria">
                    <br>
                    <label for="max">16 GB</label>
                    <input type="radio" class="form-check-input" class="form-check-input" name="memoria">
                    <br>
                    <label for="max-extend">32 Gb</label>
                    <input type="radio" class="form-check-input" name="memoria">
                </div>

                <div class="form-check" id="Precio">
                    <label for="precio">Precio</label><br>
                    <label for="barato">Barato</label>
                    <input type="radio" class="form-check-input" name="precio">
                    <br>
                    <label for="economico">Economico</label>
                    <input type="radio" class="form-check-input" name="precio">
                    <br>
                    <label for="Caro">Lo mas caro</label>
                    <input type="radio" class="form-check-input" class="form-check-input" name="precio">
                    <br>

                </div>




                <button name="mostrar">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                        </svg>
                    </div>
                    <!-- <input type="submit" value="Mostrar" name="mostrar" id="boton"> -->
                    <span>Mostrar</span>
                </button>


            </form>




        </div>

        <div class="container bg-light d-flex flex-column justify-content-around">

            <?php
            require_once('../controlers/controlador.php');
            $cLaptop = new ControladorPortatil();


            // if(isset($_POST['mostrar'])){
            //     echo 'El boton funciona';
            //     $datos=  $cLaptop->mostrar();
            //   }

            ?>

        </div>
    </div>
    <!-- <footer class=" fixed-bottom">
        <div>
            <div>
                <h6>Redes solciales</h6>
            </div>
            <div>
                <h6>About</h6>
            </div>
        </div>

    </footer> -->
</body>

</html>