<html>
    <body>

<?php

 function diferenciaEdad($edad1,$edad2){
    if($edad1 > $eda2){
        $diferencia=$edad1-$edad2;
    } elseif ($edad2>$edad1) {
        $diferencia=$edad2-$edad1;
    }
 }
 if($_SERVER["REQUEST_METHOD"]== "POST"){
    if (isset($_POST["edad1"])&& isset($_POST["edad2"])){
        $hermano1=$_POST["edad1"];
        $hermano2=$_POST["edad2"];
        $diferencia=diferenciaEdad($hermano1,$hermano2);
        echo "La diferencia de edad entre los dos hermanos es: " . $diferencia . " años.";
    }
 }

?>
 
 <form method="POST" action="">
        <label for="edad1">Introduce un número:</label>
        <input type="number" id="edad1" name="edad1" value=" ">
        <label for="edad2">Introduce un número:</label>
        <input type="number" id="edad2" name="edad2" value="">
        <input type="submit" value="Submit">
        
    </form>
</body>
</html>