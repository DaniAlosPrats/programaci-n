<?php
$texto="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas tempor lacus, eu ornare erat aliquet at. Nulla arcu lectus, bibendum non arcu vel, fermentum mollis felis. Nam eget imperdiet justo, at tristique leo. Donec luctus lacinia dolor et suscipit. Aliquam felis nunc, fringilla ac metus in, tincidunt vulputate erat. Suspendisse euismod hendrerit nisl. Morbi consequat est id erat porttitor, ut posuere massa condimentum. Morbi vitae nisi id magna tincidunt condimentum nec vel metus. Sed ac dignissim neque. Nam nunc tellus, malesuada sit amet nulla sed, scelerisque ullamcorper libero. Sed venenatis eu urna ut auctor. Fusce sollicitudin id nulla luctus varius.\nUt tincidunt justo sem, et vehicula diam feugiat eu.Quisque quis velit ex.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Ut erat mauris, condimentum a nulla et, iaculis elementum nisl.Mauris justo dui, sollicitudin sed lacus in, rhoncus volutpat mauris.Duis commodo, erat ac feugiat egestas, neque elit auctor nunc, quis varius eros dolor eu neque.Aliquam erat volutpat.Nunc facilisis, libero eu feugiat gravida, lorem neque gravida diam, nec gravida lacus nulla et ex.Integer at consequat diam.Suspendisse potenti.Nam sed nisi ultrices, consequat ante vehicula, posuere felis.Morbi vitae diam tempus, egestas neque vitae, maximus risus.Etiam id tempus libero.Etiam urna dui, vestibulum sit amet eleifend id, lacinia vitae mi.Aenean in nisi venenatis enim malesuada efficitur.\nNam non eleifend erat, vel tempor purus.Quisque consectetur, tellus id tincidunt consectetur, augue quam vehicula tortor, et laoreet quam magna sit amet risus.Proin sollicitudin sagittis nibh, at aliquam lorem rutrum sed.Morbi tellus magna, suscipit eget sapien ut, varius tempor velit.Etiam eu iaculis velit.Ut a rhoncus nisl.Quisque ut condimentum est.Phasellus auctor mauris vitae nisl vestibulum, in lacinia erat tincidunt.Vestibulum sit amet mi vitae purus eleifend sagittis in ac mi.Sed in mi facilisis, interdum eros non, tristique neque.Donec finibus pellentesque velit.Donec sed lorem eget nisl aliquam suscipit.Nunc fermentum, sapien a bibendum vehicula, mi nisl scelerisque lectus, ac euismod mi augue nec arcu.Praesent laoreet diam sit amet sodales efficitur.\nPhasellus nec felis sollicitudin, pulvinar risus non, euismod neque.Aenean ultricies rhoncus neque, sed tempor quam consequat vel.Donec finibus, eros sed tincidunt varius, eros magna ornare lectus, quis consequat ex nulla et lacus.Suspendisse vitae enim eget felis faucibus vestibulum.Maecenas a ligula massa.Integer nec scelerisque odio.Etiam vel aliquam neque, sit amet semper lectus.\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis iaculis leo vel pharetra ornare.Vestibulum mi nunc, sollicitudin iaculis vulputate in, egestas a orci.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Cras sit amet gravida risus.Vivamus dignissim dapibus metus, in convallis eros.Phasellus id purus tellus.Vestibulum rutrum libero sapien, non gravida odio varius sit amet.Curabitur tristique velit eu laoreet aliquam.Phasellus vel justo felis.";

function Numeropalabras( $texto){
   $textonoespacio=str_replace(array(" ","\n","\r", ),'',$texto);
   $numletras=strlen($textonoespacio);
   return $numletras; 
}
$resultado= Numeropalabras($texto);
echo"el numero es $resultado";

function Contarpalabras($texto){
     $numpalabras = str_word_count($texto);
     return $numpalabras;
 }
 $resul=Contarpalabras($texto);
echo "la cantidad de palabras son:".$resul;

function Contarfrases($texto){
    $frases = preg_split('/[.!?]+', $texto, -1 PREG_SPLIT_NO_EMPTY);
    $numfrases = count($frases);
return $numfrases;
}
$resul2=Contarfrases($texto);   
echo "<br> la cantidad de frases son :". $resul2;

function Contarpragrafos($texto){
    $parrafos = preg_split('/\R{2,}',$texto);
    $numpragrafos = count($parrafos);
    return $numpragrafos;
}
$resul3=Contarpragrafos($texto);
echo "<br> la cantidad de pragrafos son : ". $resul3;

function Medialetrasporpalabra($texto){
    $words=str_word_count($texto,0);
    $caracteres=strlen(preg_replace('/\s','', $texto));

    if($words>0){
        $media=$caracteres/$words;
    }else{
        $media="No hay letras en el texto";
    }
    return $media;
}
    $resul4=Medialetrasporpalabra($texto);
    echo "<br> La media de letras por palbra es : ". $resul4;

function Promediodepaalabrasporfrase($texto){
    $frases= preg_split('/[.!?]+', $texto,-1 PREG_SPLIT_NO_EMPTY);
    $numfras= count($frases);
    $totalletra=0;
    foreach($frases as $frase) {
        $totalletra += str_word_count($frase);
}
if($numfras > 0){
    $promedio=$totalletra/$numfras;
} else{
    $promedio="no hay frases";
}
return $promedio;
}

$resul5=Promediodepaalabrasporfrase($texto);
echo "<br> El promedio de letras por frase es : ". $resul5;

function promediofrasesenparrafos($texto){
    $parrafo = preg_split('/\R{2,}',$texto)
    $num_parrafo=count($parrafo);
    $totalfra=0;
    foreach ($parrafo as $parr) {
        $fra= preg_split('/[.!?]+', $parrafo, -1, PREG_SPLIT_NO_EMPTY):
        $total_fra += count($fra);
}
if($num_parrafo > 0){
    $promediaf=$total_fra/$num_parrafo;
} else{
    $promediaf="no hay parrafos";
}
return $promediaf;
}
$resul6=promediofrasesenparrafos($texto);
echo "<br> El promedio de frases por parrafo es: " . $resul6;

function encotrarletra($texto){
    $texto_nospace= str_replace(' ', '', $texto);
    $letras=str_split($texto_nospace);
    $contador_letras = array_count_values($letras);


    $letra_moda= array_search(max($contador_letras), $contador_letras);
    return $letra_moda;
}
$resul7= encotrarletra($texto);
echo "<br>La letra mas repetida en el texto es: ". $resul7;

function Palabramoda($texto){
$palabras= str_word_count($texto,1);
$palabras_cont= array_count_values($palabras);
$palabra_masrepetida=array_search(max($palabras_cont), $palabras_cont); 
return $palabra_masrepetida;
}
$resul8=Palabramoda($texto);
echo "<br> La palabra mas repetida en el texto es: ". $resul8;






?>