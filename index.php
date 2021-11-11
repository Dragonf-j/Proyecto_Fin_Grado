<!DOCTYPE html>
<html lang="es">
<?php

?>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Elige tu portatil</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <script src='main.js'></script>
</head>

<body>
    <header class="container-fluid cabecera">
        <div >
            <h1>Elige tu portatil</h1>
            <nav class="col-sm-3 p-3 rounded-pill ">
                
                <ul class="nav nav-pills  justify-content-center">
                    <li class="nav-item col-sm-4   ">
                        <a href="index.php" class="nav-link active  ">Inicio</a>
                    </li>
                    <li class="nav-item col-sm-4 ">
                        <a href="vistas/tipos.php" class="nav-link active ">Tipos portatiles</a>
                    </li>
                    <li class="nav-item col-sm-4 ">
                        <a href="vistas/elegir.php" class="nav-link active ">Elige tu portatil</a>
                    </li>
                </ul>






            </nav>
        </div>

    </header>

    <div  class="container bg-light p-2 ms-auto principal">
        <div class="row">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab culpa a laboriosam eos dicta aliquid quod aspernatur, repellat tempore earum facilis blanditiis rerum eaque harum voluptatem fuga esse unde suscipit!


        </div>
        <div class="row">
        <?php
            require_once('controlers/controladorIndex.php');
            $cLaptop = new controlerIndex();
            $cLaptop->random();
        ?>

        </div>

    </div>


    </div>
    <footer class=" fixed-bottom">
        <div>
            <div>
                <h6>Redes solciales</h6>
            </div>
            <div>
                <h6>About</h6>
            </div>
        </div>

    </footer>
</body>

</html>