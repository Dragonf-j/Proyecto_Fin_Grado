<?php
session_start();
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src='../javaScript/elegir.js'></script>
    <script src='../javaScript/ajax.js'></script>
    <link rel="stylesheet" href="../estilos/estilos.css">

</head>
<style>

</style>

<body>
    <header class="container-fluid cabecera">

        <h1>Elige tu portátil</h1>
        <!-- <div>
            <a href="loging.php">Inicia sesion</a>
            <a href="registrar.php">Registrate</a>
        </div> -->
        <nav class="navbar navbar-expand-sm  navbar-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg>
                                Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="tipos.php" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                                </svg>
                                Tipos portátiles</a>
                        </li>
                        <li class="nav-item">
                            <a href="elegir.php" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                                Elige tu portátil</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <a href="loging.php">Inicia sesion</a>
                    <a href="registrar.php">Registrate</a>
                </div>
            </div>
        </nav>

    </header>

    <div>
        <div class="container bg-light d-flex flex-column justify-content-around ">
            <form action="" method="POST" class="grid">

                <div class="form-check " id="tipos">
                    <label for="Tipo">Tipos de portatiles</label><br>
                    <label for="gaming">Gaming</label>
                    <input type="radio" class="form-check-input" class="tipos" name="tipos" value="gaming">
                    <br>
                    <label for="basico">Básico</label>
                    <input type="radio" class="form-check-input" class="tipos" name="tipos" value="basico">
                    <br>
                    <label for="workstation">Workstation</label>
                    <input type="radio" class="form-check-input" class="tipos" name="tipos" value="workstation">
                    <br>
                    <label for="Convertible">2 en 1</label>
                    <input type="radio" class="form-check-input" class="tipos" name="tipos" value="Convertible">

                </div>



                <div class="form-check" id="almacenamiento">
                    <label for="Almacenamiento">Almacenamiento</label><br>
                    <label for="menos">250 GB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento" value="menos">
                    <br>
                    <label for="medio">500 GB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento" value="medio">
                    <br>
                    <label for="max">1 TB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento" value="max">
                    <br>
                    <label for="max-extend">+1 TB</label>
                    <input type="radio" class="form-check-input" name="almacenamiento" value="max-extend">
                </div>

                <div class="form-check" id="ram">
                    <label for="ram">RAM

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-memory" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.586a1 1 0 0 0 .707-.293l.353-.353a.5.5 0 0 1 .708 0l.353.353a1 1 0 0 0 .707.293H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1Zm.5 1h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5Zm5 0h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5Zm4.5.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4ZM2 10v2H1v-2h1Zm2 0v2H3v-2h1Zm2 0v2H5v-2h1Zm3 0v2H8v-2h1Zm2 0v2h-1v-2h1Zm2 0v2h-1v-2h1Zm2 0v2h-1v-2h1Z" />
                        </svg>
                    </label><br>
                    <!-- <label for="4">4</label>
                    <input type="radio" class="form-check-input" name="memoria" value="4">
                    <br> -->
                    <label for="8">8</label>
                    <input type="radio" class="form-check-input" name="memoria" value="8">
                    <br>
                    <label for="16">16</label>
                    <input type="radio" class="form-check-input" name="memoria" value="16">
                    <br>
                    <label for="32">32</label>
                    <input type="radio" class="form-check-input" name="memoria" value="32">
                </div>

                <div class="form-check" id="Precio">
                    <label for="precio">Presupuesto
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-euro" viewBox="0 0 16 16">
                            <path d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936c0-.11 0-.219.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.617 6.617 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z" />
                        </svg>
                    </label><br>
                    <label for="bajo">Bajo</label>
                    <input type="radio" class="form-check-input" name="precio" value="bajo">
                    <br>
                    <label for="moderado">Moderado</label>
                    <input type="radio" class="form-check-input" name="precio" value="moderado">
                    <br>
                    <label for="elevado">Elevado</label>
                    <input type="radio" class="form-check-input" class="form-check-input" name="precio" value="elevado">
                    <br>

                </div>
                <div class="form-check" id="Pulgadas">
                    <label for="Pulgadas">Pulgadas

                    </label><br>
                    <label for="pequeño">Pequeño</label>
                    <input type="radio" class="form-check-input" name="Pulgadas" value="pequeño">
                    <br>
                    <label for="medio">Medio</label>
                    <input type="radio" class="form-check-input" name="Pulgadas" value="medio">
                    <br>
                    <label for="grande">Grande</label>
                    <input type="radio" class="form-check-input" class="form-check-input" name="Pulgadas" value="grande">
                    <br>

                </div>
                <div class="form-check" id="hz">
                    <label for="hz">Hercios

                    </label><br>
                    <label for="estandar">Estandar</label>
                    <input type="radio" class="form-check-input" name="hz" value="estandar">
                    <br>
                    <label for="medio">Competición</label>
                    <input type="radio" class="form-check-input" name="hz" value="medio">
                    <br>
                    <label for="alto">Alta competición</label>
                    <input type="radio" class="form-check-input" class="form-check-input" name="hz" value="alto">
                    <br>

                </div>




                <input class="boton" type="submit" value="mostrar" name="mostrar">


            </form>




        </div>

        <div class="container bg-light p-2 ms-auto principal thumbnail">

            <?php
            require_once('../controlers/controlador.php');
            $cLaptop = new ControladorPortatil();
            require_once('/xampp/htdocs/Dragonf/proyecto/models/model_laptop_user/userLapCrud.php');
            require_once('/xampp/htdocs/Dragonf/proyecto/models/model_laptop_user/lap_user.php');

            $lup = new userLapCrud();
            // var_dump($cLaptop->mostrar());


            if (isset($_POST['mostrar'])) {

                $lap = $cLaptop->mostrar();
                montarTabla::montar($lap);
                
            }
            if (isset($_SESSION["usuario"])) {
                $user = $_SESSION["usuario"];
                foreach ($lap as $key => $value) {
                    $id = $value['id'];
                }
                $id2 = (int)$id;
                var_dump($id2);
                // echo $user;
                $al = new laptopuser($user, $id2);
             
                $lup->anadir($al);
            }
            ?>

        </div>
    </div>
    <footer class="has-sticky-footer">
        <div>
            <div>
                <h6>Redes sociales</h6>
            </div>
            <div>
                <h6>About</h6>
            </div>
        </div>



    </footer>
</body>
<style>
    .grid {
        display: grid;
        grid-template-columns: 33% 33% 33%;

    }

    .boton {
        grid-column: 1 / span 3;
        grid-row: 4;
        width: 20%;
        align-items: center;
        border-top: 1px solid grey;
    }

    /* .principal {
        display: grid;
        grid-template-columns: 33% 33% 33%;
        grid-column-gap: 5px
    } */

    .tabla {
        border: 1px black solid;
        padding: 8vh;
    }

    /* footer{
        bottom: 0;
        position: fixed;
        width: 100%;
    } */

    #boton {
        display: grid;
        grid-template-columns: 20%;

    }
</style>

</html>