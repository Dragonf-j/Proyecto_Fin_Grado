<?php

class montarTabla
{
    public static function montarIndex($datos)
    {

        foreach ($datos as $key => $value) {
            $nombre = $value['nombre'];
            $img = $value["imagen"];
            $tipo = $value['tipo'];
            $ram = $value['ram'];
            $enlaceA = $value['enlace_amazon'];
            $precioa = $value['precio_amazon'];
            // $enlacePc = $value['enlace_pccomponetes'];
            // $preciop = $value['precio_pcpcomponentes'];
            $almacenamiento = $value['almacenamiento'];


?>

            <div class="">
                <table class="tabla ">
                    <tr>
                        <th>
                            <h3 class="container bg-light p-2 ms-auto h3"><?php echo $nombre; ?></h3>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <h5>
                                <?php echo $tipo; ?>
                            </h5>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <p>Memoria RAM: <?php echo $ram; ?>GB</p>
                        </th>
                    </tr>
                    <tr>
                    <th>
                        <p>ALmacenamiento en disco: <?php echo $almacenamiento; ?></p>
                    </th>
                    </tr>
                    <tr>
                        <th>
                            <div class="img">
                                <img class="img-responsive img-thumbnail" src="img/<?php echo $img; ?>" alt="img" >
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <button class="btn btn-outline-secondary">
                                <a class="nav-link" href="<?php echo $enlaceA; ?>">Amazon</a>
                                <p><?php echo $precioa; ?>€</p>
                            </button>
                        </th>
                    </tr>
                </table>






            </div>

        <?php
        }
    }

    public static function montar($datos)
    {

        foreach ($datos as $key => $value) {
            $nombre = $value['nombre'];
            $img = $value["imagen"];
            $tipo = $value['tipo'];
            $ram = $value['ram'];
            $enlaceA = $value['enlace_amazon'];
            $precioa = $value['precio_amazon'];
            //se rompen los enlaces de pc componentes
            // $enlacePc = $value['enlace_pccomponetes'];
            // $preciop = $value['precio_pcpcomponentes'];
            $almacenamiento = $value['almacenamiento'];


        ?>
            <div>
                <h3 class="container bg-light p-2 ms-auto h3"><?php echo $nombre; ?></h3>
                <?php
                ?> <h5><?php echo $tipo; ?></h5>
                <?php
                ?> <p>Memoria RAM: <?php echo $ram; ?>GB</p>
                <?php
                ?>
                <p>ALmacenamiento en disco: <?php echo $almacenamiento; ?></p>
                <img class="img-responsive img-thumbnail" src="../img/<?php echo $img; ?>" alt="img">
                <?php echo '<br>'; ?>
                <button class="btn btn-outline-secondary">
                    <a class="nav-link" href="<?php echo $enlaceA; ?>">Amazon</a>
                    <p><?php echo $precioa; ?>€</p>
                </button>

            </div>

<?php
        }
    }
}
?>