

<?php
function numRomano($numero) {
    $num_romano = '';
    $numerosDecimales = array(1, 4, 5, 9, 10, 40, 50, 90, 100, 400, 500, 900, 1000);
    $numerosRomanos = array("I", "IV", "V", "IX", "X", "XL", "L", "XC", "C", "CD", "D", "CM", "M");

    $i = 12;
    while ($numero > 0) {
            $divison = (int)($numero/ $numerosDecimales[$i]);
            $numero %= $numerosDecimales[1];
            while($divison--){
                $num_romano .= $numerosRomanos[$i];
            }
        $i--;
    
            
    }
       
    return $num_romano;
}
function validarNum($numero){
    return ($numero >= 1 && $numero <=10)
}
   $numero = 6;
   if (validarNum($numero)) {
       echo "numero decimal" $numero "<br>";
       echo "numero romano" numRomano($numero) "<br>";
   } else {
    echo "el numero no es valido";

   }

 
?>
 
 
