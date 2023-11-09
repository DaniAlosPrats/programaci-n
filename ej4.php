<?php

$empleados = [
    'Juan'=>[
       'horas' => 40,
       'tarifa' => 15
    ],
    'Perico'=>[
       'horas' => 20,
       'tarifa' => 25
    ],
    'Andrés'=>[
       'horas' => 45
    ],
 ];

 function Calculasalario ($horas , $tarifas = 10){
    if($horas<40){
        $salario = $horas * $tarifas;
    } else {
        $horasnormales = 40;
        $excedente = $horas - 40;
        $salario = ($horasnormales * $tarifas)+ $horas*$salario*1.25 
    }
    return $salario;
}
foreach ($empleados as $nombre => $value) {
    $horastrabajo= $value["horas"];
    $tarifahora = $value["tarifa"];

    $salario = Calculasalario($horasnormales, $tarifahora)
    echo " $nombre <br> ";
    echo " $salario €";
}
 
 
?>