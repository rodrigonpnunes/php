<?php
function nameCountryAndCapital($arrayP){
    if (!(is_array($arrayP))) {
        return "not array! :( ";
    }
     foreach ($arrayP as $key =>$value){
         echo "\nA capital do " . $value . " eh" . $key . "]" ;
         
     }  
}
$location=array(
        "Brasilia" => "Brasil",
        "Washington" => "EUA",
        "Madri" => "Espanha",
        "Lisboa" => "Potugual",
        "Lima" => "Peru"
    );
asort($location);
nameCountryAndCapital($location);
?>