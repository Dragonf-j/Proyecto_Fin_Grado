<?php

class montarTabla
{
    public static function montarIndex($datos)
    {
?>

            <div class="thumbnail">
                <?php
                foreach ($datos as $key => $value) {


                    if ($key == 0) {

                        echo '<table>';
                        echo '<tr>';


                        foreach ($value as $k1 => $v1) {

                            echo '<th>';
                            echo $k1;
                            echo '</th>';
                        }
                        echo '</tr>';
                    }

                    echo '<tr>';

                    foreach ($value as $k1 => $v1) {

                        echo '<td>';
                        echo $v1;
                        echo '</td>';
                    }
                    echo '</tr>';
                }
                ?>





            </div>

        <?php
        
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