<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- $sentencia='SELECT * from portatil cross join usuarios ' -->
</head>

<body>
    <div class="cabecera">
    <?php
    require('../controlers/controler_user/controler_user.php');
   
    $cUser = new controler();
    if (isset($_POST['enviar'])) {
        $cUser->registrar();
    }
    ?>
    <h1>Inicia Sesion</h1>

<nav class="navbar navbar-expand-sm  navbar-dark">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <p>
                        Vovler a la página de
                        <a href="../index.php" >
                            inicio
                        </a>
                    </p>
                </li>

            </ul>
        </div>
    </div>
</nav>


    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="email">Email</label>
        <input type="email" name="correo" id="correo">
        <br>
        <labbel for="contra">Contraseña</labbel>
        <input type="password" name="contra" id="contra">
        <br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <p>
        Si ya tienes cuenta inicicia sesion aqui
    <a href="loging.php">Login</a>
    </p>
    
    </div>
</body>
<style>
   h1 {
        border-bottom: 1px grey solid;
        text-align: center;
    }

    .cabecera {
        border: 1px grey solid;
        border-radius: 5px;
        margin-top: 50px;
        

    }

    body {
        background-color: rgb(34, 34, 34);
        color: rgb(223, 223, 223);
    }
    
</style>
</html>