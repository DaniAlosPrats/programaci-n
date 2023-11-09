<?php
function visualizarnum($caracter , $numero){
    for($i =1, $i <=$numero, $i++){
        echo str_repeat($caracter, $i * 2 - 1)
    }for($i=$numero -1, $i>=1,$i--){
        echo str_repeat($caracter, $i * 2 - 1)
    }

}

visualizarnum("*", 4);
?>