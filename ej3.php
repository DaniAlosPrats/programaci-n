<?php
function dameNumero($numero){
    $numerolote = mt_rand(1,49);

    while(in_array($numerolote, $numero)){
        $numerolote = mt_rand(1,49);
    }
     return $numerolote;
}
   function generarnum(){
    $ganador = array()
    while(count($ganador)< 6){
        $nuevo=dameNumero($ganador);
        $ganador[]= $nuevonumero;
    } 
    return $ganador;
   }
   $combinacion = generarnum ();
   echo "el numero ganador es <br>";
   echo (implode(",", $combinacion));
?>