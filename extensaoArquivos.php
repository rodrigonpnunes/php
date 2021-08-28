<?php
function printar($arrayP){
    if (!(is_array($arrayP))) {
        return "not array! :( ";
    }
     $cont=1;
     foreach ($arrayP as $key =>$value) {
         echo "\n". $cont . " " . $value;
         $cont++;
     }  
}

$location=array("music.mp4", "video.mov", "magem.jpeg");
$arrayAux=array();
foreach ($location as $key =>$value){
    $p=explode(".", $value);
    if (count($p)>=2){
        array_push($arrayAux, ".".$p[1]);
    }
}
asort($arrayAux);
printar($arrayAux);
?>