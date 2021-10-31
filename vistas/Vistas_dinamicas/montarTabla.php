<?php

class montarTabla{
    public static function montar($datos){
        foreach($datos as $key=>$value){
            if($key == 0){

                echo '<table>';
                echo '<tr">';

                foreach($value as $key2=>$value2){
                    echo '<th>';
                    echo $key2;
                    echo '</th>';
                }
                echo '</tr>';
            }

            echo '<tr >';

            foreach($value as $key2=>$value2){
                echo '<td>';
                echo $value2;
               
                echo '</td>';

                
            }
            echo '</tr>';
            echo '</table>';
        }
    }



 
}



?>