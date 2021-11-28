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
    .grid {
        display: grid;
        grid-template-columns: 45% 45%;
    }

    #boton {
        display: inline;
    }

    .icon span {
        transition: .4s ease-in-out all;
        position: absolute;
        left: 40%;

    }

    .icon:hover span {
        left: 20px;
    }
</style>

<body>
    <header class="container-fluid cabecera">

        <h1>Elige tu portatil</h1>
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
                                Tipos portatiles</a>
                        </li>
                        <li class="nav-item">
                            <a href="elegir.php" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                                Elige tu portatil</a>
                        </li>
                    </ul>
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
                    <input type="radio" class="form-check-input" class="tipos" onclick="mostrar(0) " name="tipos">
                    <br>
                    <label for="simple">Básico</label>
                    <input type="radio" class="form-check-input" class="tipos" onclick="mostrar(1)" name="tipos">
                    <br>
                    <label for="edi">Workstation</label>
                    <input type="radio" class="form-check-input" class="tipos" onclick="mostrar(2)" name="tipos">
                    <br>
                    <label for="ultra">Ultrabook</label>
                    <input type="radio" class="form-check-input" class="tipos" onclick="mostrar(3)" name="tipos">
                    <br>
                    <label for="dosenuno">2 en 1</label>
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
                    <label for="menos">4</label>
                    <input type="radio" class="form-check-input" name="memoria">
                    <br>
                    <label for="medio">8</label>
                    <input type="radio" class="form-check-input" name="memoria">
                    <br>
                    <label for="max">16</label>
                    <input type="radio" class="form-check-input" class="form-check-input" name="memoria">
                    <br>
                    <label for="max-extend">32</label>
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
            include_once('../controlers/Controlers_index/controlador.php');
            $controlerIndex = new controlerIndex();



            // if(isset($_POST['mostrar'])){
            //     echo 'El boton funciona';
            //     $datos=  $cLaptop->mostrar();
            //   }

            ?>

        </div>
    </div>
    <footer class="has-sticky-footer">
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