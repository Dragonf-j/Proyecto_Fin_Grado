<!DOCTYPE html>
<html>


<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src='../javaScript/elegir.js'></script>
</head>

<body>
    <header>
        <div class="bg-info sticky-sm-top sticky-md-top sticky-lg-top sticky-xl-top">
            <h1>Elige tu portatil</h1>
            <div>
                <ul class=" nav justify-content-center">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link active">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="tipos.php" class="nav-link active">Tipos portatiles</a>
                    </li>
                    <li class="nav-item">
                        <a href="elegir.php" class="nav-link active">Elige tu portatil</a>
                    </li>

                </ul>




            </div>
        </div>

    </header>

    <div class="container bg-light d-flex flex-column justify-content-around ">
        <form action="">
            <div class="form-check" id="tipos">
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

            <div class="form-check" id="peso">
                <label for="peso">Peso</label><br>
                <label for="ligero">Peso Ligero</label>
                <input type="radio" class="form-check-input" name="Peso">
                <br>
                <label for="simple">Peso medio</label>
                <input type="radio" class="form-check-input" name="Peso">
                <br>
                <label for="edi">Peso grande</label>
                <input type="radio" class="form-check-input" name="Peso">

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
            <div class="form-check" id="Pulgadas">
                <label for="ram">Pulgadas</label><br>
                <label for="menos">Portatil pequeño</label>
                <input type="radio" class="form-check-input" name="pulgadas">
                <br>
                <label for="medio">Portatil medio</label>
                <input type="radio" class="form-check-input" name="pulgadas">
                <br>
                <label for="max">Portatil grande</label>
                <input type="radio" class="form-check-input" class="form-check-input" name="pulgadas">
                <br>

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

            <div class="form-check" id="Hercios">
                <label for="hercios">Hercios</label><br>
                <label for="basico">60hz-75hz</label>
                <input type="radio" class="form-check-input" name="hercios">
                <br>
                <label for="competicion">144hz-165hz</label>
                <input type="radio" class="form-check-input" name="hercios">
                <br>
                <label for="altaCompeticion">240hz-300hz</label>
                <input type="radio" class="form-check-input" class="form-check-input" name="hercios">
                <br>
                <label for="altaCompeticion+">360hz</label>
                <input type="radio" class="form-check-input" class="form-check-input" name="hercios">
                <br>

            </div>

            <div class="form-check" id="net">
                <label for="network">Conector de Red</label><br>
                <label for="afirmativo">Si</label>
                <input type="radio" class="form-check-input" name="network">
                <br>
                <label for="negativo">No</label>
                <input type="radio" class="form-check-input" name="network">
                <br>


            </div>


            <div class="form-check" id="system">
                <label for="sistema">Sistema operativo</label><br>
                <label for="afirmativo">Si</label>
                <input type="radio" class="form-check-input" name="sistema">
                <br>
                <label for="negativo">No</label>
                <input type="radio" class="form-check-input" name="sistema">
                <br>


            </div>


            <div class="form-check" id="Tipo c">
                <label for="c">USB Tipo C</label><br>
                <label for="afirmativo">Si</label>
                <input type="radio" class="form-check-input" name="c">
                <br>
                <label for="negativo">No</label>
                <input type="radio" class="form-check-input" name="c">
                <br>


            </div>

            <div class="form-check" id="thunderBolt">
                <label for="Thunderbolt">Conector Thunderbolt</label><br>
                <label for="afirmativo">Si</label>
                <input type="radio" class="form-check-input" name="Thunderbolt">
                <br>
                <label for="negativo">No</label>
                <input type="radio" class="form-check-input" name="Thunderbolt">
                <br>


            </div>
            <div>
                <input type="submit" value="Mostrar" name="mostrar">
            </div>
        </form>
        <form action="../models/imagenes.php" method="POST" enctype="multipart/form-data">
        
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen">
            <input type="submit" value="Enviar">
        </form>
      


    </div>

    <div class="container bg-light d-flex flex-column justify-content-around">
        
        <?php    
    require_once('../controlers/controlador.php');
       $cLaptop = new ControladorPortatil();

        $datos=  $cLaptop->mostrar();
  
        
        ?>

    </div>

    <!-- <footer class="bg-info fixed-bottom">
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